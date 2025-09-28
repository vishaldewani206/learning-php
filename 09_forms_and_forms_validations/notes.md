# Intro to forms and form validation

### creating a form
`note-create.view.php`
the method POST will not make the inputs as query in the URL.
```html
<form method="POST">
    <div class="flex flex-col my-4">
        <label for="body">Description</label>
        <textarea cols="40" rows="6" id="body" class="p-2 w-1/2" name="body"></textarea>

    </div>

    <p>
        <button type="submit" class="px-5 py-2 bg-blue-700 text-white">Create Note</button>
    </p>
</form>
```
In `note-create.php`
this will show you the form data in a associated array.
```php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    dd($_POST);
}

```
