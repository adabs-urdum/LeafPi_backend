<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class Homecontroller extends Controller{
  public function home()
  {
    $env = env('APP_ENV');
    dd($env);
    $process = new Process("python3 python_scripts/turn_off.py");
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
}
