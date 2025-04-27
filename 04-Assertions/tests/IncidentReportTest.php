<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/IncidentReport.php';

class IncidentReportTest extends TestCase
{
    public function testIncidentReportCanBeCreated(): void
    {
        // Arrange
        $incidentId = 'INC-2025-1234';
        $date = date_create_immutable();
        $durationInMinutes = 20;
        $subject = 'XSS by unfiltered phone number';
        $description = 'Cross-side scripting by unfiltered phone number';
        $firstResponders = new ArrayIterator(['John', 'Jane', 'Bruce']);
        $endUserImpacted = true;
        $dataExposed = false;
        $privacyViolation = false;

        // Act
        $incidentReport = new IncidentReport(
            $incidentId,
            $date,
            $durationInMinutes,
            $subject,
            $description,
            $firstResponders,
            $endUserImpacted,
            $dataExposed,
            $privacyViolation
        );

        // Assert
        $this->assertSame($incidentId, $incidentReport->getIncidentId());
        $this->assertInstanceOf(DateTimeInterface::class, $date);
        $this->assertSame($date, $incidentReport->getDate());
        $this->assertSame($durationInMinutes, $incidentReport->getDurationInMinutes());
        $this->assertSame($subject, $incidentReport->getSubject());
        $this->assertSame($description, $incidentReport->getDescription());
        $this->assertCount(3, $firstResponders);
        $this->assertTrue($incidentReport->isEndUserImpacted());
        $this->assertFalse($incidentReport->isDataExposed());
        $this->assertFalse($incidentReport->isPrivacyViolation());
    }
}

