<?php

namespace Source\Core;

class Session
{
    /**
     *
     */
    public function __construct()
    {
        if (!session_id()) {
            session_save_path(CONF_SES_PATH);
            session_start();
        }
    }

    /**
     * @param string $name
     * @return mixed|null
     */
    public function __get(string $name)
    {
        if(!empty($_SESSION[$name]))
        {
           return $_SESSION[$name];
        }
        return null;
    }

    /**
     * @param string $name
     * @return bool
     */
    public function __isset(string $name): bool
    {
        return $this->has($name);
    }

    /**
     * @return object|null
     */
    public function all(): ?object
    {
        return (object)$_SESSION;
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return $this
     */
    public function set(string $key, $value): Session
    {
        $_SESSION[$key] = (is_array($value) ? (object)$value : $value);
        return $this;
    }

    /**
     * @param string $key
     * @return $this
     */
    public function unset(string $key): Session
    {
        unset($_SESSION[$key]);
        return $this;
    }

    /**
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool
    {
        return isset($_SESSION[$key]);
    }

    //regenera a sessão mantendo os dados e deleta o outro arquivo de sessão

    /**
     * @return $this
     */
    public function regenarate(): Session
    {
        session_regenerate_id(true);
        return $this;
    }

    /**
     * @return $this
     */
    public function destroy(): Session
    {
        session_destroy();
        return $this;
    }

    /**
     * @return Message|null
     */
    public function flash(): ?Message
    {
        if($this->has("flash")) {
            $flash = $this->flash;
            $this->unset("flash");
            return $flash;
        }
        return null;
    }
}