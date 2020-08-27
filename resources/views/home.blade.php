@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('message.survey.title') }}
                    <div> {{ __('message.survey.sub_title') }}</div>
                    <div>
                        {{ __('message.survey.info')}}
                        <a href="https://github.com/hiep1998vnhn11/graduate-project-survey" target="_blank">Source Code </a>
                    </div>
                </div>
                
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <p><strong>{{ __('message.survey.Question1.title') }}</strong></p>
                        </div>
                        <div class="card-body">{{ __('message.survey.Question1.answer1') }}</div>
                        <div class="card-body">{{ __('message.survey.Question1.answer2') }}</div>
                        <div class="card-body">{{ __('message.survey.Question1.answer3') }}</div>
                        <div class="card-body">{{ __('message.survey.Question1.answer4') }}</div>
                        <div class="card-body">{{ __('message.survey.Question1.answer5') }}</div>
                        <div class="card-body">{{ __('message.survey.Question1.answer6') }}</div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            {{ __('message.survey.Question2.title') }}
                        </div>
                        <div class="card-body">{{ __('message.survey.Question2.answer1') }}</div>
                        <div class="card-body">{{ __('message.survey.Question2.answer2') }}</div>
                        <div class="card-body">{{ __('message.survey.Question2.answer3') }}</div>
                        <div class="card-body">{{ __('message.survey.Question2.answer4') }}</div>
                        <div class="card-body">{{ __('message.survey.Question2.answer5') }}</div>
                        <div class="card-body">{{ __('message.survey.Question2.answer6') }}</div>
                        <div class="card-body">{{ __('message.survey.Question2.answer7') }}</div>
                        <div class="card-body">{{ __('message.survey.Question2.text') }}</div>

                    </div>

                    <div class="card">
                        <div class="card-header">
                            {{ __('message.survey.Question3.title') }}
                        </div>
                        <div class="card-body">{{ __('message.survey.Question3.answer1') }}</div>
                        <div class="card-body">{{ __('message.survey.Question3.answer2') }}</div>
                        <div class="card-body">{{ __('message.survey.Question3.answer3') }}</div>
                        <div class="card-body">{{ __('message.survey.Question3.answer4') }}</div>
                        <div class="card-body">{{ __('message.survey.Question3.answer5') }}</div>
                        <div class="card-body">{{ __('message.survey.Question3.answer6') }}</div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            {{ __('message.survey.Question4.title') }}
                        </div>
                        <div class="card-body">{{ __('message.survey.Question4.answer1') }}</div>
                        <div class="card-body">{{ __('message.survey.Question4.answer2') }}</div>
                        <div class="card-body">{{ __('message.survey.Question4.answer3') }}</div>
                        <div class="card-body">{{ __('message.survey.Question4.answer4') }}</div>
                        <div class="card-body">{{ __('message.survey.Question4.answer5') }}</div>
                        <div class="card-body">{{ __('message.survey.Question4.answer6') }}</div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            {{ __('message.survey.Question5.title') }}
                        </div>
                        <div class="card-body">{{ __('message.survey.Question5.answer1') }}</div>
                        <div class="card-body">{{ __('message.survey.Question5.answer2') }}</div>
                        <div class="card-body">{{ __('message.survey.Question5.answer3') }}</div>
                        <div class="card-body">{{ __('message.survey.Question5.answer4') }}</div>
                        <div class="card-body">{{ __('message.survey.Question5.answer5') }}</div>
                        <div class="card-body">{{ __('message.survey.Question5.answer6') }}</div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            {{ __('message.survey.Question6.title') }}
                        </div>
                        <div class="card-body">{{ __('message.survey.Question6.answer1') }}</div>
                        <div class="card-body">{{ __('message.survey.Question6.answer2') }}</div>
                        <div class="card-body">{{ __('message.survey.Question6.answer3') }}</div>
                        <div class="card-body">{{ __('message.survey.Question6.answer4') }}</div>
                        <div class="card-body">{{ __('message.survey.Question6.answer5') }}</div>
                        <div class="card-body">{{ __('message.survey.Question6.answer6') }}</div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            {{ __('message.survey.Question7.title') }}
                        </div>
                        <div class="card-body">{{ __('message.survey.Question7.answer1') }}</div>
                        <div class="card-body">{{ __('message.survey.Question7.answer2') }}</div>
                        <div class="card-body">{{ __('message.survey.Question7.answer3') }}</div>
                        <div class="card-body">{{ __('message.survey.Question7.answer4') }}</div>
                        <div class="card-body">{{ __('message.survey.Question7.answer5') }}</div>
                        <div class="card-body">{{ __('message.survey.Question7.answer6') }}</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
