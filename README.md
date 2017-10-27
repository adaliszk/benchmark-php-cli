# Benchmark: PHP CLI
Just a simple test to check different php versions and installed modules how's effect the minimal possible script runtime.

The test itself really simple, I track the elapsed time with linux `time` command and I run some of the scripts to see the different php builds performance.

> My testing machine has a `Intel® Core™ i7-7700K CPU @ 4.20GHz × 8`, `2 × 16GB HyperX RAM @ 2400Mhz` and the storage is a `HiperX SSD with M.2.` connection.

## Minimal Echo
The simpliest echo possible

![Elapsed Time](https://github.com/adaliszk/benchmark-php-cli/blob/master/charts/et_minimal-echo.png?raw=true)
![Process per Second](https://github.com/adaliszk/benchmark-php-cli/blob/master/charts/pps_minimal-echo.png?raw=true)
