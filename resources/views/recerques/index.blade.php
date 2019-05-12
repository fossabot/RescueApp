@extends('layouts.app')

@section('title', __('main.searches'))

<script src="{{ asset('js/pooper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

@section('content')

  <!-- Alerts - OPEN -->

  <!-- Success - OPEN -->
  @if( session('status') )
    <div class="alert alert-success" role="alert">
      <div class="container text-center">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          {{ session('status') }}
      </div>
    </div>
  <!-- Success - CLOSE -->

  <!-- Error - OPEN -->
  @elseif( session()->get('error') )
    <div class="alert alert-error alert-dismissible fade show" role="alert">
      <div class="container text-center">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          {{ session()->get('error') }}
      </div>
    </div>
  @endif
  <!-- Error - CLOSE -->

  <!-- Alerts - CLOSE -->

  <!-- Content - OPEN -->
  <div class="container margin-top">

    <!-- Tabs nav - OPEN -->
    <nav class="project-tab">

      <!-- Tabs - OPEN -->
      <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">

        <!-- Searches tab - OPEN -->
        <a class="nav-item nav-link active" id="nav-searches-tab" data-toggle="tab"
        href="#nav-searches" role="tab" aria-controls="nav-searches" aria-selected="true">
          {{ __('main.searches') }}
        </a>
        <!-- Searches tab - CLOSE -->

        <!-- Practices tab - OPEN -->
        <a class="nav-item nav-link" id="nav-practices-tab" data-toggle="tab"
        href="#nav-practices" role="tab" aria-controls="nav-practices" aria-selected="false">
          {{ __('main.practices') }}
        </a>
        <!-- Practices tab - CLOSE -->

      </div>
      <!-- Tabs - CLOSE -->

    </nav>
    <!-- Tabs nav - CLOSE -->

    <!-- Tabs content - OPEN -->
    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">

      <!-- Searches tab content - OPEN -->
      <div class="tab-pane fade show active text-center margin-top" id="nav-searches"
      role="tabpanel" aria-labelledby="nav-searches-tab">

        <!-- If NO searches - OPEN -->
        @if( count($recerques) == 0 )
              <div class="card text-center">
                <div class="card-body">

                  <h1 class="card-title">
                    {{ __('messages.no_searches') }}
                  </h1>

                  <a href="{{ route('recerques.create') }}" class="btn btn-primary" role="button">
                    {{ __('actions.add') . ' ' . __('main.search') }}
                  </a>

                </div>
              </div>
        <!-- If NO searches - CLOSE -->

        <!-- If exists searches - OPEN -->
        @else
            <h1> Recerques </h1>
            {{ count($recerques) }}
        @endif
        <!-- If exists searches - CLOSE -->

      </div>
      <!-- Searches tab content - CLOSE -->

      <!-- Practices tab content - OPEN -->
      <div class="tab-pane fade text-center margin-top" id="nav-practices"
      role="tabpanel" aria-labelledby="nav-practices-tab">

        <!-- If NO practices - OPEN -->
        @if( count($practiques) == 0 )
              <div class="card text-center">
                <div class="card-body">

                  <h1 class="card-title">
                    {{ __('messages.no_practices') }}
                  </h1>

                  <a href="{{ route('recerques.create') }}" class="btn btn-primary" role="button">
                    {{ __('actions.add') . ' ' . __('main.practice') }}
                  </a>

                </div>
              </div>
        <!-- If NO practices - CLOSE -->

        <!-- If exists practices - OPEN -->
        @else
            <h1> Practiques </h1>
            {{ count($practiques) }}
        @endif
        <!-- If exists practices - CLOSE -->

      </div>
      <!-- Practices tab content - CLOSE -->

    </div>
    <!-- Tabs content - CLOSE -->

  </div>
  <!-- Content - CLOSE -->


  <!-- JS -->
  <script>

    $(document).ready(function() {
      $('[data-toggle="tooltip"]').tooltip();
    });

  </script>

@endsection
