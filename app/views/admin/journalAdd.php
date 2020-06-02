<script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

<!-- Theme included stylesheets -->
<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

<div id="wrapper">
    <h1>Добавить новую статью</h1>
    <form action="/admin/journal/add" method="POST" enctype="multipart/form-data">
        <label for="header">Заголовок</label>
        <input name="header" type="text" value="<? if (isset($vars['header'])) echo $vars['header']; ?>" placeholder="Введите заголовок статьи" required>

        <label>Обложка</label>
        <input name="file" id="fileInput" type="file" accept="image/*" required>

        <label for="header">Категория</label>
        <select name="category" value="<? echo $vars['category']; ?>" required>
            <option value="" selected disabled hidden>Выберите категорию</option>
            <option>Архитектура</option>
            <option>История</option>
            <option>Экология</option>
            <option>Туризм</option>
            <option>Природа</option>
        </select>

        <label for="description">Описание</label>
        <input name="description" type="text" value="<? if (isset($vars['description'])) echo $vars['description']; ?>" placeholder="Введите описание статьи" required>

        <label for="content">Текст</label>
        <textarea name="content" id="textAreaContent"></textarea>

        <div id="toolbar"></div>
        <div id="editor"><? if (isset($vars['content'])) echo $vars['content']; ?></div>
        <button name="save" id="save">Сохранить</button>
        <button name="temp" id="save">Просмотреть</button>

        <div id="message">
            <p>
                <? 
                    if (isset($_SESSION['message']))
                        echo $_SESSION['message'];
                    unset($_SESSION['message']); 
                ?>
            </p>
        </div>
        <label id="date"><? echo date('d.m.Y в G:i');?></label>
    </form>
</div>

<script>
    var toolbarOptions = [
        ['bold', 'strike'],
        ['blockquote', 'code-block'],
        [{'header': [2, 3, false]}],
        [{'list': 'ordered'}, {'list': 'bullet'}],
        [{'script': 'sub'}, {'script': 'super'}],
        [{'indent': '-1'}, {'indent': '+1'}],
        ['link', 'image', 'video', 'formula'],
        [{'color': []}, {'background': [false, '#da9516d2']}],
        [{'align': []}],
    ];

    var quill = new Quill('#editor', {
        modules: {
            toolbar: toolbarOptions
        },

        placeholder: 'Текст статьи',
        theme: 'snow',
    });

    var textAreaContent = document.getElementById('textAreaContent');
    var textAreaQuill = document.getElementById('textAreaQuill');
    var form = document.querySelector('form');
    form.onsubmit = function() {

        var justHtml = quill.root.innerHTML;
        var justQuill = JSON.stringify(quill.getContents());

        textAreaContent.innerHTML = justHtml;

        textAreaQuill.innerHTML = justQuill;

    };

</script>