<?php
trait weightable
{
    private int $weightKg;

    public function getWeightKg(): int
    {
        return $this->weightKg;
    }

    public function setWeightKg($weightKg): void
    {
        $this->weightKg = $weightKg;
    }
}
