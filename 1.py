#!/usr/bin/python -tt

import sys

# Define a main() function that prints a little greeting.
def main():
  
  upperlim = 1000
  
  sum = 0
  
  for i in range(upperlim):
    if not i % 3:
      sum += i
    elif not i % 5:
      sum += i
    
  print sum

# This is the standard boilerplate that calls the main() function.
if __name__ == '__main__':
  main()
