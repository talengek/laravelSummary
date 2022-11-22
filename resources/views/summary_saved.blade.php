@extends('layouts.app')


@section('content')

    <div class="container row">
        <div class="text-start">
            <h2>{{ $data->name }} {{ $data->surname }} {{ $data->middle_name }}</h2>

            <p class="text-start col-4 fw-weight-lighter">

                @if ($data->age == '22' ?? '23' ?? '24' ?? '32' ?? '33' ?? '34')
                {{ $data->age }} года,

                @elseif($data->age == '21' ?? '31' ?? '41')
                    {{ $data->age }} год,

                @else
                    {{ $data->age }} лет,
                @endif

                {{$data->education}}
                {{$data->city}},
                Гражданство: {{$data->nationality}}
            </p>
            <div>
                <h4>{{ $data-> vacancy }}</h4>
            </div>
        </div>
        <p class="fw-weight-bold">
            {{ $data -> salary }} рублей
            Опыт работы {{ $data -> work }} лет
        </p>
        <div class="col-12 text-start">{{ $data -> work_experience }}</p></div>

        <div class="row align-items-start">
            <div class="col">
                {{$data->education}}
                {{ $data -> education_all1 }}

            </div>
            <div class="col">
                {{ $data -> education_all2 }}
            </div>
        </div>

        <div class=" col-12"> Обо мне
            {{ $data -> about_me }}
        </div>

        <div class="row">
            <div class="col-10">
                {{ $data -> other_information }}
            </div>
        </div>
        <div>
            Иностранные языки
            Английский язык — разговорный
        </div>

        <div class="mt-3 mb-3">
        <a href="{{ route('summary-update', $data -> id) }}">
            <button class="btn btn-primary"> Редактировать </button> </a>
        </div>


    </div>
@endsection









