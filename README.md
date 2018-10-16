# higimo/flip-file-array
Default $_FILES array:
```
[
    'upload' => [
        'name' => 'index.html',
        'type' => 'text/html'
    ]
]
```

convert to:
```
[
    'name' => [
        'upload' => 'index.html'
    ],
    'type' => [
        'upload' => 'text/html'
    ]
]
```

## Install
```
composer.bat require higimo/flip-file-array
```

## License
MIT
