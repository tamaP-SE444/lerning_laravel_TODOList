@if (count($errors) > 0)
  <!-- Form Error List -->
  <div class="alert alert-danger">
    <div><strong>入力した文字を修正してください。</strong></div>
    <div>
      <ul>
        @foreach ($error->all() as $errorr)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  </div>
@endif