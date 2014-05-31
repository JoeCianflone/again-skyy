<?php
namespace Cianflone\Again\Sanitizers;

abstract class BaseSanitizer
{
    /**
     * An array of sanitizer methods to be
     * executed.
     *
     * @var array
     */
    protected $sanitizers = [];

    /**
     * Trigger the sanitization process by
     * iterating the sanitizers array and
     * mutating our data array.
     *
     * @param  array $data
     * @return array
     */
    public function sanitize($data)
    {
        // Iterate all of the sanitizer methods.
        foreach ($this->sanitizers as $sanitizer) {
            $method = 'sanitize'.$sanitizer;
            // If the sanitization method exists, call it
            // to mutate our data set.
            if (method_exists($this, $method)) {
                $data = call_user_func([$this, $method], $data);
            }
        }

        return $data;
    }
}
