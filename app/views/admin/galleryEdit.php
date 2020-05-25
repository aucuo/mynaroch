<div id="wrapper">
    <img src="/<? echo $vars['small']; ?>" alt="">
    <div id="formWrapper">
        <form action="/admin/gallery/edit/<?echo $vars['id'];?>" method="post" enctype="multipart/form-data">
            <label>Комментарий</label>
            <input name="comment" type="text" placeholder="Введите новое описание к картинке">

            <button name="edit" type="submit">Редактировать</button>
            <button name="delete" type="submit">Удалить</button>

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
</div>