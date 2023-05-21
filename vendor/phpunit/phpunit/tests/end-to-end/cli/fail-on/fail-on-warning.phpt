--TEST--
Test Runner exits with shell exit code indicating failure when all tests are successful but at least one warning was triggered
--SKIPIF--
<?php declare(strict_types=1);
if (DIRECTORY_SEPARATOR === '\\') {
    print "skip: this test does not work on Windows / GitHub Actions\n";
}
--FILE--
<?php declare(strict_types=1);
$traceFile = tempnam(sys_get_temp_dir(), __FILE__);

$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--no-output';
$_SERVER['argv'][] = '--log-events-text';
$_SERVER['argv'][] = $traceFile;
$_SERVER['argv'][] = '--fail-on-warning';
$_SERVER['argv'][] = __DIR__ . '/../../_files/stop-on-fail-on/WarningTest.php';

require __DIR__ . '/../../../bootstrap.php';

(new PHPUnit\TextUI\Application)->run($_SERVER['argv']);

print file_get_contents($traceFile);

unlink($traceFile);
--EXPECTF--
PHPUnit Started (PHPUnit %s using %s)
Test Runner Configured
Test Suite Loaded (2 tests)
Event Facade Sealed
Test Runner Started
Test Suite Sorted
Test Runner Execution Started (2 tests)
Test Suite Started (PHPUnit\TestFixture\TestRunnerStopping\WarningTest, 2 tests)
Test Preparation Started (PHPUnit\TestFixture\TestRunnerStopping\WarningTest::testOne)
Test Prepared (PHPUnit\TestFixture\TestRunnerStopping\WarningTest::testOne)
Test Triggered Warning (PHPUnit\TestFixture\TestRunnerStopping\WarningTest::testOne)
message
Assertion Succeeded (Constraint: is true, Value: true)
Test Passed (PHPUnit\TestFixture\TestRunnerStopping\WarningTest::testOne)
Test Finished (PHPUnit\TestFixture\TestRunnerStopping\WarningTest::testOne)
Test Preparation Started (PHPUnit\TestFixture\TestRunnerStopping\WarningTest::testTwo)
Test Prepared (PHPUnit\TestFixture\TestRunnerStopping\WarningTest::testTwo)
Assertion Succeeded (Constraint: is true, Value: true)
Test Passed (PHPUnit\TestFixture\TestRunnerStopping\WarningTest::testTwo)
Test Finished (PHPUnit\TestFixture\TestRunnerStopping\WarningTest::testTwo)
Test Suite Finished (PHPUnit\TestFixture\TestRunnerStopping\WarningTest, 2 tests)
Test Runner Execution Finished
Test Runner Finished
PHPUnit Finished (Shell Exit Code: 1)
