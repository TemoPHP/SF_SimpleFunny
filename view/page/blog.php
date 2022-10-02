<h1>Привет {{ first_name }} {{ second_name }}.</h1>
<p class="lead">Вот ты и создал свою <b>первю страничку</b>. Надеюсь, тебе очень радостно и ты безумно горд за себя. =)</p>

<img src="{{ img }}" alt="Твоя загруженная кратинка">

<p>P.S. Кстати, не стоит везде рассказывать что тебе {{ age }} лет и ты из города {{ city }}</p>

<div class="container mt-5 knowledge">
    <div class="row">
        <div class="col-md-12">
            <span>создан блок с классом knowledge и в нем продемонстрированы полученные знания, в виде созданных переменных с присвоенным значением разного типа, которые выведены в коде, а затем отображены в браузере.</span>
        </div>
    </div>
    <table class="m-auto">
        <thead>
        <tr>
            <th>Тип/операция</th>
            <th>Значение</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>Строка</td>
                <td> {{ string }} </td>
            </tr>
            <tr>
                <td>Число с плавующей</td>
                <td> {{ float }} </td>
            </tr>
            <tr>
                <td>скалдываем 3 + 5</td>
                <td> {{ sum }} </td>
            </tr>
            <tr>
                <td>Конкатенция "a" и "b"</td>
                <td> {{ str }} </td>
            </tr>
            <tr>
                <td>Число с плавующей</td>
                <td> {{ float }} </td>
            </tr>
        </tbody>
    </table>
</div>