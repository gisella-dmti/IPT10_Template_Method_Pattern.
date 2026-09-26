<?php

declare(strict_types=1);

abstract class StudentReport
{
    final public function generateReport(): void
    {
        $this->getStudentData();
        $this->processData();
        $this->formatReport();
        $this->displayReport();
    }

    protected function getStudentData(): void
    {
        echo "Getting student data..." . PHP_EOL;
    }

    abstract protected function processData(): void;

    abstract protected function formatReport(): void;

    protected function displayReport(): void
    {
        echo "Displaying report..." . PHP_EOL;
    }
}

final class AcademicReport extends StudentReport
{
    protected function processData(): void
    {
        echo "Calculating academic grades..." . PHP_EOL;
    }

    protected function formatReport(): void
    {
        echo "Formatting academic report..." . PHP_EOL;
    }
}

final class AttendanceReport extends StudentReport
{
    protected function processData(): void
    {
        echo "Calculating attendance percentage..." . PHP_EOL;
    }

    protected function formatReport(): void
    {
        echo "Formatting attendance report..." . PHP_EOL;
    }
}

$academicReport = new AcademicReport();
$academicReport->generateReport();

echo PHP_EOL;

$attendanceReport = new AttendanceReport();
$attendanceReport->generateReport();
