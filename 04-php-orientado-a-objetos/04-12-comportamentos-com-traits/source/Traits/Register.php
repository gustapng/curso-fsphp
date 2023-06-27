<?php

namespace Source\Traits;

class Register
{
    use UserTrait;
    use AddressTrait;
    public function __construct(User $user, Address $address)
    {
        $this->setUser($user);
        $this->setAddress($address);
        $this->save();
    }

    private function save(): void
    {
        $this->user->id = 232;
        $this->address->user_id = $this->user->id;
    }
}