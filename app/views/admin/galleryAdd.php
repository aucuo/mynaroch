<div id="wrapper">
    <form action="/admin/gallery/add" method="post" enctype="multipart/form-data">

        <label>Комментарий</label>
        <input name="comment" type="text" placeholder="Введите описание к картинке">

        <label>Файл</label>
        <input name="file" id="fileInput" type="file" accept="image/*">

        <button type="submit">Загрузить</button>

        <div id="message">
            <p><? 
                    if (isset($_SESSION['message']))
                        echo $_SESSION['message'];
                    unset($_SESSION['message']); 
                ?>
            </p>
        </div>
    </form>
</div>