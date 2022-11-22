@extends('layouts.app')

@section('title-block')Обновление@endsection

@section('content')
    <h1>Обновление</h1>

    <form action="{{ route('summary-update-submit', $data->id) }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Выберите картинку:</label>
            <input type="text" name="img" value="{{$data->img}}" placeholder="Введите имя" id="img" class="form-control">
        </div>

        <div class="form-group">
            <label for="name">Введите имя:</label>
            <input type="text" name="name" value="{{$data->name}}" placeholder="Введите имя" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="Email">Введите фамилию:</label>
            <input type="text" name="surname" value='{{$data->surname}}' placeholder="Введите фамилию" id="surname" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Тема отчество:</label>
            <input type="text" name="middle_name" value='{{$data->middle_name}}' placeholder="Введите отчество" id="middle_name" class="form-control">
        </div>

        <div class="form-group">
            <label for="name">Введите возраст:</label>
            <input type="text" name="age" value='{{$data->age}}' placeholder="Введите возраст" id="age" class="form-control">
        </div>

        <div class="form-group">
            <label for="Email">Введите город:</label>
            <input type="text" name="city" value='{{$data->city}}' placeholder="Введите город" id="city" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Образование</label>
            <input type="text" name="education" value='{{$data->education}}' placeholder="Среднее/высшее" id="education" class="form-control">
        </div>

        <div class="form-group">
            <label for="name">Национальность:</label>
            <input type="text" name="nationality" value='{{$data->nationality}}' placeholder='Россия/США' id="nationality" class="form-control">
        </div>

        <div class="form-group">
            <label for="Email">Желаемая вакансия:</label>
            <input type="text" name="vacancy" value='{{$data->vacancy}}' placeholder="Программист/Судья" id="vacancy" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Желаемая заработная плата</label>
            <input type="text" name="salary" value='{{$data->salary}}' placeholder="80.000р" id="salary" class="form-control">
        </div>

        <div class="form-group">
            <label for="name">Опыт работы в годах:</label>
            <input type="text" name="work" value='{{$data->work}}' placeholder="1/2/3" id="work" class="form-control">
        </div>

        <div class="form-group">
            <label for="Email">Расскажите о своём опыте работы</label>
            <textarea type="text" name="work_experience" placeholder="Подробнее" id="work_experience" class="form-control">{{$data->work_experience}}</textarea>
        </div>

        <div class="form-group">
            <label for="subject">Форма обучения</label>
            <input type="text" name="education_all1" value='{{$data->education_all1}}' placeholder="Очно/заочно" id="education_all1" class="form-control">
        </div>

        <div class="form-group">
            <label for="name">ВУЗ</label>
            <input type="text" name="education_all2" value='{{$data->education_all2}}' placeholder="СИБ ГУ" id="education_all2" class="form-control">
        </div>

        <div class="form-group">
            <label for="Email">Обо мне</label>
            <textarea type="text" name="about_me"  placeholder="Подробнее" id="about_me" class="form-control">{{$data->about_me}}</textarea>
        </div>

        <div class="form-group">
            <label for="subject">Другие сведения</label>
            <input type="text" name="other_information" value='{{$data->other_information}}' placeholder="Другие сведения" id="other_information" class="form-control">
        </div>

        <button type="submit" class="btn btn-success mt-3 mb-3">Отправить</button>
    </form>
@endsection
