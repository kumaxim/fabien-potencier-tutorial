# Create your own framework... on top of the Symfony2 Components

When I was interviewed for Senior PHP Developer position I received from a couple of companies test job that sound like
as 'Create blog without using any frameworks'. Meanwhile, the code must be written in OOP paradigm. During following discussion interviewer 
told me that expect to see my own framework that implement the assigned task. 

Well, I have used different frameworks before, e.g. Lumen, Laravel, Yii, CodeIgniter, CakePHP, Silex, Flask, Ruby on Rails. However, I never 
wrote my own. 

I went to Google and after some searching time I found tutorial "[Create your own framework... on top of the Symfony2 Components][own-framework-original]" 
by [Fabien Potencier][fabian]. The 1st 6 parts are available in [Habr.com][own-framework-habr] in Russian. The rest one I found on Fabian's blog.
This seemed like what I needed, and I have started to study.

This repository contains the code that I got after finished this course. I decided to save it here with according to related links just in case.
Most likely, I will go back to this code when I will write the code of test jobs. Perhaps, I will share this repo with my colleagues or go back myself
if I will face with same task during the job.

## CAVEAT
The tutorial was written in 2012 on PHP 5.x. I am writing this words from 2022 when PHP 8.0/8.1 is actual versions. 

__ATTENTION__: Don't try to do this course on PHP 8. Downgrade your PHP to 7.4. Look at `composer.json` and use the same version of packages that I used.
Symphony's packages that Fabien used in the course were upgraded with according to new language features. You will face with side effects that
will slow you down. Just downgrade your PHP to 7.4 and start studying.

## Usage
### Requirements
- PHP 7.4
- [Composer](https://getcomposer.org/) 2.3

### Deploy
- `git clone git@github.com:kumaxim/fabien-potencier-tutorial.git`
- `cd fabien-potencier-tutorial`
- `composer install`
- `/usr/bin/php7.4 -S localhost:8080 -t %/your/full/path/to/folder/fabien-potencier-tutorial/web%`

__Notice__: `web` at the end of path is mandatory


## Usefully links:
Fabian's original tutorials:
1. [fabien.potencier.org](http://fabien.potencier.org/) - Search all 12 parts by keywords `Create your own framework... on top of the Symfony2 Components`
2. [2015 tutorial update in Symphony Docs][own-framework-updated]
3. [Tutorial in Russian]: 
   1. [One](https://habr.com/ru/post/136110/)
   2. [Two](http://habrahabr.ru/blogs/symfony/136430/)
   3. [Tree](http://habrahabr.ru/blogs/symfony/136471/)
   4. [Four](http://habrahabr.ru/blogs/symfony/136656/)
   5. [Five](http://habrahabr.ru/blogs/symfony/138010/)
   6. [Six](http://habrahabr.ru/blogs/symfony/138893/)

## Copyright

[Maxim Kudryavtsev](https://k-maxim.ru/). 2022. All rights reserved.

The code in this repository distribute under MIT License.


[own-framework-original]: http://fabien.potencier.org/create-your-own-framework-on-top-of-the-symfony2-components-part-1.html
[own-framework-updated]: https://symfony.com/doc/current/create_framework/index.html
[own-framework-habr]: https://habr.com/ru/post/136110/
[fabian]: http://fabien.potencier.org/