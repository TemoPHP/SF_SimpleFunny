<form action="/blog" method="post" enctype="multipart/form-data">
    <div style="width: 400px; display: flex; justify-content: space-between; margin: auto">
        <label for="first_name">Имя</label>
        <input type="text" id="first_name" name="first_name">
    </div>
    <div style="width: 400px; display: flex; justify-content: space-between; margin: auto">
        <label for="second_name">Фамилия</label>
        <input type="text" id="second_name" name="second_name">
    </div>
    <div style="width: 400px; display: flex; justify-content: space-between; margin: auto">
        <label for="age">Возраст</label>
        <input type="number" id="age" name="age">
    </div>
    <div style="width: 400px; display: flex; justify-content: space-between; margin: auto">
        <label for="city">Город</label>
        <input type="text" id="city" name="city">
    </div>
    <div style="width: 400px; display: flex; justify-content: space-between; margin: auto">
        <label for="img">Изображение</label>
        <input type="file" name="img" id="img">
    </div>
    <button class="mt-3 btn btn-primary" type="submit">Создать страничку</button>
</form>