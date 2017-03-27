---
view::extends: _includes.docs_post_base
view::yields: post_body
pageTitle: - Posts
pageDescription: Orchid Posts systems for Laravel
---
@verbatim
#Posts
----------
The platform assumes that by default any elements that contain site data are a `Post` model.

So, now you can fetch database data:

```php
$posts = Post::all();
```

```php
// All published posts
$posts = Post::published()->get();
$posts = Post::status('publish')->get();

// A specific post
$post = Post::find(31);

//The name of the record taking into account the current localization
echo $post->getContent('name');

```


### Single Table Inheritance

If you choose to create a new class for your custom post type, you can have this class be returned for all instances of that post type.

The definition of the behavior of a record is based on the specified `type`.
```php
//all objects in the $videos Collection will be instances of Post
$videos = Post::type('video')->status('publish')->get();
```


### Taxonomies

You can get taxonomies for a specific post like:

```php
$post = Post::find(1);
$taxonomy = $post->taxonomies()->first();
echo $taxonomy->taxonomy;
```

Or you can search for posts using its taxonomies:

```php
$post = Post::taxonomy('category', 'php')->first();
```

### Categories & Taxonomies

Get a category or taxonomy or load posts from a certain category. There are multiple ways
to achieve it.


```php
// all categories
$category = Taxonomy::category()->slug('uncategorized')->posts()->first();


// only all categories and posts connected with it
$category = Taxonomy::where('taxonomy', 'category')->with('posts')->get();
$category->each(function($category) {
    echo $category->getContent('name');
});

// clean and simple all posts from a category
$category = Category::slug('uncategorized')->posts()->first();
$category->posts->each(function($post) {
    echo $post->getContent('name');
});

@endverbatim
