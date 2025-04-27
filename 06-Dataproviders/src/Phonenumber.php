<?php

class Phonenumber
{
    private Iterator $collection;

    public function __construct()
    {
        $this->collection = new ArrayIterator();
    }

    public function addNumber(string $phonenumber): void
    {
        $cleanNumber = $this->cleanNumber($phonenumber);
        $this->collection->append($cleanNumber);
    }

    public function hasNumber(string $phonenumber): bool
    {
        $this->collection->rewind();
        do {
            if ($phonenumber === $this->collection->current()) {
                return true;
            }
            $this->collection->next();
        } while ($this->collection->valid());
        return false;
    }

    public function getNumbers(): array
    {
        return $this->collection->getArrayCopy();
    }

    private function cleanNumber(string $phonenumber): string
    {
        $cleanNumber = filter_var($phonenumber, FILTER_SANITIZE_NUMBER_INT);
        $cleanNumber = str_replace('-', '', $cleanNumber);
        $cleanNumber = preg_replace('/^00/', '+', $cleanNumber);
        $cleanNumber = preg_replace('/^0/', '+32', $cleanNumber);
        if (!filter_var($cleanNumber, FILTER_VALIDATE_INT)) {
            throw new InvalidArgumentException(
                'Please provide a valid phone number'
            );
        }
        return $cleanNumber;
    }
}
