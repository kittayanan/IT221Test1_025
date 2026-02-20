<?php
    def add(a, b):
    if a < 0 or b < 0:
        return 0
    return a + b

print(add(2, 3))
        
    $from main import add

def test_add():
    assert add(2, 3) == 5
    assert add(-1, 3) == 0

  name: Python CI

on:
  push:
    branches: [ main ]
  pull_request:
    branches: [ main ]

jobs:
  test:
    runs-on: ubuntu-latest

    steps:
      - uses: actions/checkout@v4

      - name: Set up Python
        uses: actions/setup-python@v5
        with:
          python-version: '3.11'

      - name: Install dependencies
        run: |
          python -m pip install --upgrade pip
          pip install pytest

      - name: Run tests
        run: pytest
?>
