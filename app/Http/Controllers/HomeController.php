<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class Homecontroller extends Controller{
  public function home()
  {
    $env = env('APP_ENV');
    if($env == "local_casterly_rock"):
    endif;
    $command = "python3 ./python_scripts/turn_off.py";
    $cwd = null;
    $envVars = [ 'HOME' => getEnv('HOME'), 'PATH' => getEnv('PATH') ];
    $process = new Process($command, $cwd, $envVars);
    $process->run();

    // executes after the command finishes
    if (!$process->isSuccessful()) {
      throw new ProcessFailedException($process);
    }

    echo $process->getOutput();
    // Result (string): {'neg': 0.204, 'neu': 0.531, 'pos': 0.265, 'compound': 0.1779}
      return view('welcome');
  }

  public function turnOff(){
    $process = new Process("python3 python_scripts/turn_off.py");
    $process->run();

    // executes after the command finishes
    if (!$process->isSuccessful()){
      throw new ProcessFailedException($process);
    }

    echo $process->getOutput();
    // Result (string): {'neg': 0.204, 'neu': 0.531, 'pos': 0.265, 'compound': 0.1779}
      return view('welcome');
  }

  public function turnOn(){
    $process = new Process("python3 python_scripts/turn_on.py");
    $process->run();

    // executes after the command finishes
    if (!$process->isSuccessful()){
      throw new ProcessFailedException($process);
    }

    echo $process->getOutput();
    // Result (string): {'neg': 0.204, 'neu': 0.531, 'pos': 0.265, 'compound': 0.1779}
      return view('welcome');
  }

  public function toggleOn(){
    $process = new Process("python3 python_scripts/toggle_on.py");
    $process->run();

    // executes after the command finishes
    if (!$process->isSuccessful()){
      throw new ProcessFailedException($process);
    }

    echo $process->getOutput();
    return view('welcome');
  }

  public function temperature($newTemperature){
    $newTemperature = (int) $newTemperature;
    $currentTemperature = $this->getTemperature();
    $difference = $newTemperature - $currentTemperature;

    if($difference == 0){
      return view('welcome');
    }

    if($difference):
      $this->temperatureRaise($difference);
    else:
      $this->temperatureLower($difference * -1);
    endif;

    return view('welcome');
  }

  private function temperatureLower($step){
    $process = new Process(sprintf("python3 python_scripts/temperature_lower.py %s", $step));
    $process->run();

    // executes after the command finishes
    if (!$process->isSuccessful()){
      throw new ProcessFailedException($process);
    }

    echo $process->getOutput();
    return view('welcome');
  }

  private function temperatureRaise($step){
    $process = new Process(sprintf("python3 python_scripts/temperature_raise.py %s", $step));
    $process->run();

    // executes after the command finishes
    if (!$process->isSuccessful()){
      throw new ProcessFailedException($process);
    }

    echo $process->getOutput();
    return view('welcome');
  }

  private function getTemperature(){
    $process = new Process("python3 python_scripts/temperature_get.py");
    $process->run();

    // executes after the command finishes
    if (!$process->isSuccessful()){
      throw new ProcessFailedException($process);
    }

    return (int) $process->getOutput();
  }

  public function brightness($newBrightness){
    $currentBrightness = $this->getBrightness();
    $newBrightness = (int) $newBrightness;
    $difference = $newBrightness - $currentBrightness;

    if($difference == 0):
      return view('welcome');
    endif;

    if($difference):
      $this->brightnessRaise($difference);
    else:
      $this->brightnessLower($difference * -1);
    endif;

    return view('welcome');
  }

  private function brightnessLower($step){
    $process = new Process(sprintf("python3 python_scripts/brightness_lower.py %s", $step));
    $process->run();

    // executes after the command finishes
    if (!$process->isSuccessful()){
      throw new ProcessFailedException($process);
    }

    echo $process->getOutput();
    return view('welcome');
  }

  private function brightnessRaise($step){
    $process = new Process(sprintf("python3 python_scripts/brightness_raise.py %s", $step));
    $process->run();

    // executes after the command finishes
    if (!$process->isSuccessful()){
      throw new ProcessFailedException($process);
    }

    echo $process->getOutput();
    return view('welcome');
  }

  private function getBrightness(){
    $process = new Process("python3 python_scripts/brightness_get.py");
    $process->run();

    // executes after the command finishes
    if (!$process->isSuccessful()){
      throw new ProcessFailedException($process);
    }

    return (int) $process->getOutput();
  }
}
