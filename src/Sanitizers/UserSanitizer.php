<?php
namespace Cianflone\Again\Sanitizers;

use Illuminate\Hashing\HasherInterface as Hash;

class UserSanitizer extends BaseSanitizer
{
    public function __construct(Hash $hash)
    {
        $this->hash = $hash;
    }

    public function trim($data)
    {
        return trim($data);
    }

    public function toLowerCase($data)
    {
        return strtolower($data);
    }

    public function hash($data)
    {
        return $this->hash->make($data);
    }
}
