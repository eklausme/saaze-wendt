<p>
<a href="https://packagist.org/packages/eklausme/saaze-wendt"><img src="https://img.shields.io/packagist/v/eklausme/saaze-wendt" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/eklausme/saaze-wendt"><img src="https://img.shields.io/packagist/l/eklausme/saaze-wendt" alt="License"></a>
</p>


# Example theme for Simplified Saaze: Wendt

Here is another theme called [Wendt](https://eklausmeier.goip.de/wendt) for [_Simplified Saaze_](https://eklausmeier.goip.de/blog/2021/10-31-simplified-saaze).
The example content is from Alexander Wendt's [Publico](https://www.publicomag.com) magazine.

Some key features of the Wendt-theme:
1. Responsive with media breaks for large and small screens, and for printing.
2. Top menu with submenus.
3. Two column using CSS grid, ["Holy Grail Layout"](https://en.wikipedia.org/wiki/Holy_grail_(web_design)).
4. Multiple blogs:
	- Each category has its own blog by using filtering.
	- Each author has its own blog by using filtering.
	- Aggregate blog, i.e., the combination of the above.
5. Using the `<!--more-->` tag to showcase the initial content of a blog post.
6. Sitemap in HTML and XML, RSS feed.
7. WebAssembly based search using pagefind.
8. No cookies, therefore no annoying cookie banner required.

![](https://eklausmeier.goip.de/img/WendtTheme1.webp)

See [Example Theme for Simplified Saaze: Wendt](https://eklausmeier.goip.de/blog/2024/05-13-example-theme-for-simplified-saaze-wendt) for installation, conversion, and usage.


# Simplified Saaze

_Simplified Saaze_ is a fast, all-inclusive, flat-file CMS for simple websites and blogs.

Static site builders are fast but normally have a steep learning curve and require lots of tooling to make them work. We believe building a personal site should be stupidly simple. That's why _Simplified Saaze_ is built on the following principles.

* Easy to run - All you need is [PHP8](https://www.php.net), a C compiler, and [Composer](https://getcomposer.org)
* Easy to host - Serve dynamically or statically
* Easy to edit - Edit content using simple Markdown files
* Easy to theme - Templates use plain PHP/HTML
* Fast and secure - No database = less moving parts + more speed
* Simple to understand - Everything is a collection of entries

For more info and documentation for the original Saaze see https://saaze.dev.
Read [_Simplified Saaze_](https://eklausmeier.goip.de/blog/2021/10-31-simplified-saaze) for installation and usage.


# Speed

The entire WordPress blog including comments has been migrated to a static site as of 01-Apr-2024.
The new site has static comments but currently does not use a commenting system like HashOver.
It features instant search via [Pagefind](https://eklausmeier.goip.de/blog/2023/10-23-pagefind-searching-in-static-sites) using WebAssembly.

The migration, theme, and installation is explained in [Example Theme for Simplified Saaze: Wendt](https://eklausmeier.goip.de/blog/2024/01-02-example-theme-for-simplified-saaze-wendt).
The migration of all the content, blog posts and comments, was done via two simple Perl scripts, less than 180 lines.

Running the [static site generator](https://eklausmeier.goip.de/blog/2021/10-31-simplified-saaze) on a regular basis:
Converting all 770 blog posts to static with comments and dependent sub-blogs takes 5.16 seconds.
In total 23,712 entries are processed, CPU is Ryzen 7 5700G.
This runtime is single threaded (one core). Using multithreading this runtime cuts in half.
The static site generator _Simplified Saaze_ is known to be more than 10-times faster than Hugo, see [Performance Comparison Saaze vs. Hugo vs. Zola](https://eklausmeier.goip.de/blog/2021/11-13-performance-comparison-saaze-vs-hugo-vs-zola).

The resulting static site is served three times faster than the WordPress site from Frankfurt and San Francisco as checked by [Pingdom](https://tools.pingdom.com).
See [Performance Comparison of Wendt Website: WordPress vs. Simplified Saaze](https://eklausmeier.goip.de/blog/2024/01-14-performance-comparison-of-wendt-website-wordpress-vs-simplified-saaze).

If you want to check the numbers, use:
```
composer create-project eklausme/saaze-wendt
```


# Credits

_Simplified Saaze_ was created by [Elmar Klausmeier](https://eklausmeier.goip.de).

Saaze was created by [Gilbert Pellegrom](https://gilbitron.me) from [Dev7studios](https://dev7studios.co). Released under the MIT license.

