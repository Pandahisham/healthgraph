<?php

namespace HealthGraph;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-11-29 at 21:26:43.
 */
class UserTest extends \PHPUnit_Framework_TestCase {

  /**
   * @var User
   */
  protected $object;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp() {
    $this->object = new User($GLOBALS['access_token'], $GLOBALS['token_type']);
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown() {
    
  }

  /**
   * @covers HealthGraph\User::get
   */
  public function testGet() {
    $this->assertObjectHasAttribute('userID', $this->object);
    $this->assertNotEmpty($this->object->userID);
  }

  /**
   * @covers HealthGraph\User::profile
   */
  public function testProfile() {
    $obj = $this->object->profile();
    $this->assertInstanceOf('\HealthGraph\Profile', $obj);
    $this->assertNotEmpty($obj->profile);
  }

  /**
   * @covers HealthGraph\User::settings
   */
  public function testSettings() {
    $obj = $this->object->settings();
    $this->assertInstanceOf('\HealthGraph\Settings', $obj);
    $this->assertObjectHasAttribute('facebook_connected', $obj);
  }

  /**
   * @covers HealthGraph\User::fitness_activities
   * @todo   Implement testFitness_activities().
   */
  public function testFitness_activities() {
    $obj = $this->object->fitness_activities();
    $this->assertInstanceOf('\HealthGraph\FitnessActivityFeed', $obj);
  }

  /**
   * @covers HealthGraph\User::strength_training_activities
   * @todo   Implement testStrength_training_activities().
   */
  public function testStrength_training_activities() {
    $obj = $this->object->strength_training_activities();
    $this->assertInstanceOf('\HealthGraph\StrengthTrainingActivityFeed', $obj);
  }

  /**
   * @covers HealthGraph\User::background_activities
   * @todo   Implement testBackground_activities().
   */
  public function testBackground_activities() {
    $obj = $this->object->background_activities();
    $this->assertInstanceOf('\HealthGraph\BackgroundActivitySetFeed', $obj);
  }

  /**
   * @covers HealthGraph\User::sleep
   * @todo   Implement testSleep().
   */
  public function testSleep() {
    $obj = $this->object->sleep();
    $this->assertInstanceOf('\HealthGraph\SleepSetFeed', $obj);
  }

  /**
   * @covers HealthGraph\User::nutrition
   * @todo   Implement testNutrition().
   */
  public function testNutrition() {
    $obj = $this->object->nutrition();
    $this->assertInstanceOf('\HealthGraph\NutritionSetFeed', $obj);
  }

  /**
   * @covers HealthGraph\User::weight
   * @todo   Implement testWeight().
   */
  public function testWeight() {
    $obj = $this->object->weight();
    $this->assertInstanceOf('\HealthGraph\WeightSetFeed', $obj);
  }

  /**
   * @covers HealthGraph\User::general_measurements
   * @todo   Implement testGeneral_measurements().
   */
  public function testGeneral_measurements() {
    $obj = $this->object->general_measurements();
    $this->assertInstanceOf('\HealthGraph\GeneralMeasurementSetFeed', $obj);
  }

  /**
   * @covers HealthGraph\User::diabetes
   * @todo   Implement testDiabetes().
   */
  public function testDiabetes() {
    $obj = $this->object->diabetes();
    $this->assertInstanceOf('\HealthGraph\DiabetesMeasurementSetFeed', $obj);
  }

  /**
   * @covers HealthGraph\User::records
   * @todo   Implement testRecords().
   */
  public function testRecords() {
    $obj = $this->object->records();
    $this->assertInstanceOf('\HealthGraph\Records', $obj);
  }

  /**
   * @covers HealthGraph\User::team
   * @todo   Implement testTeam().
   */
  public function testTeam() {
    $obj = $this->object->team();
    $this->assertInstanceOf('\HealthGraph\TeamFeed', $obj);
  }

  /**
   * @covers HealthGraph\User::change_log
   * @todo   Implement testChange_log().
   */
  public function testChange_log() {
    $obj = $this->object->change_log();
    $this->assertInstanceOf('\HealthGraph\ChangeLog', $obj);
  }

}
