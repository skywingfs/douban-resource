<h1 align="center"> douban-resource </h1>

<p align="center"> A simple book SDK,which get a book information from douban.The future will support movie from douban.</p>


## Installing

```shell
$ composer require skywing/douban-resource -vvv
```

## Usage
use Skywing\Douban\Douban;

// init  

$douban = new Douban();  

// book's isbn10/isbn13 code  

$isbn = '9787115473899';

// get a book entity  
```
try {
    $book = $douban->getBook($isbn);
    if ($book) {
        // use as an array
        $book->toArray();
        
        // or get json format
        $book->toJSON();
        
        // also, get property directly is allowed
        $book->getTitle();
        $book->getPrice();
    }
} catch (\Exception $exception) {
    // handle exception
}
```


## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/skywing/douban-resource/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/skywing/douban-resource/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT
