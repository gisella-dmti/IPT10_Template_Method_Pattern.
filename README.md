# IPT10 Midterm — Template Method Pattern in PHP

**Student:** Gisella Dimitui  
**Section:** IT-3A  
**Course:** IPT10 Integrative Programming and Technologies  
**Pattern:** Template Method (Behavioral GoF Pattern)

## Requirements
- PHP 8.1+
- No external libraries required

## Run
From the project root:

```bash
php src/StudentReport.php
```

Expected output:

```text
Getting student data...
Calculating academic grades...
Formatting academic report...
Displaying report...

Getting student data...
Calculating attendance percentage...
Formatting attendance report...
Displaying report...
```

## Syntax Check
Run:

```bash
php -l src/StudentReport.php
```

Expected:

```text
No syntax errors detected in src/StudentReport.php
```

The verified output is stored in `evidence/php-lint.txt`.

## Pattern Mapping
- **AbstractClass:** `StudentReport`
- **Template Method:** `generateReport()`
- **ConcreteClass:** `AcademicReport`
- **ConcreteClass:** `AttendanceReport`
- **Primitive operations:** `processData()`, `formatReport()`
- **Shared operations:** `getStudentData()`, `displayReport()`

## Diagrams
- `diagrams/uml_class.png` — UML class diagram
- `diagrams/sequence.png` — author-created sequence diagram
- `diagrams/uml_class.puml` — editable PlantUML source

## Research Paper
The Word/PDF research paper is supplied in the repository package.

## License
Educational use for IPT10 coursework.
