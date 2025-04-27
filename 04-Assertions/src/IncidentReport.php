<?php

class IncidentReport
{
    private string $incidentId;
    private ?DateTimeInterface $date;
    private int $durationInMinutes;
    private string $subject;
    private string $description;
    private ?Iterator $firstResponders;
    private bool $endUserImpacted;
    private bool $dataExposed;
    private bool $privacyViolation;

    public function __construct(
        string $incidentId,
        ?DateTimeInterface $date,
        int $durationInMinutes,
        string $subject,
        string $description,
        ?Iterator $firstResponders,
        bool $endUserImpacted,
        bool $dataExposed,
        bool $privacyViolation
    ) {
        $this->incidentId = $incidentId;
        $this->date = $date;
        $this->durationInMinutes = $durationInMinutes;
        $this->subject = $subject;
        $this->description = $description;
        $this->firstResponders = $firstResponders;
        $this->endUserImpacted = $endUserImpacted;
        $this->dataExposed = $dataExposed;
        $this->privacyViolation = $privacyViolation;
    }

    public function getIncidentId(): string
    {
        return $this->incidentId;
    }

    public function getDate(): ?DateTimeInterface
    {
        return $this->date;
    }

    public function getDurationInMinutes(): int
    {
        return $this->durationInMinutes;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getFirstResponders(): ?Iterator
    {
        return $this->firstResponders;
    }

    public function isEndUserImpacted(): bool
    {
        return $this->endUserImpacted;
    }

    public function isDataExposed(): bool
    {
        return $this->dataExposed;
    }

    public function isPrivacyViolation(): bool
    {
        return $this->privacyViolation;
    }
}
