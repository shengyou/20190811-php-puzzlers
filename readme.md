# PHP 机制问答

受邀在 [PHPCon China 2019](http://www.phpconchina.com/) 进行 PHP 机制问答活动，通过精心设计的问答题带给大家一场直接面向代码的有趣体验。

## 相关材料

* 简报档：https://www.slideshare.net/shengyou/php-puzzlers
* 源代码：https://github.com/shengyou/20190811-php-puzzlers

## 如何看题目及取得解答？

* 先将环境建置起来
  - 确认本机有 `PHP 7.3` 及 `Swoole 4.4.3` 
  - `composer install`
  - `composer run-script post-autoload-dump`
  - `composer run-script post-root-package-install`
  - `composer run-script post-create-project-cmd`
* 所有题目都放在 `app/Console/Commands/Puzzle*.php` 里
* 验证答案：
  - `artisan warmup` (韩老师热身题)
  - `artisan puzzle:{题号}` (题号请用 1~13 取代)

## 警告

设计这些题目的目标，只是为了呈现 PHP 语法在某些特定场景的特性 (或说是坑)。而题目在设计过程中也故意安插了许多陷阱，仅是为了增加活动的趣味性。请千万不要在您的生产代码里这样写程式！会坑到别人也会害到自己的！
