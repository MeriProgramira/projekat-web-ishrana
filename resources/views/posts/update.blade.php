@extends('layouts.user')
@section('content_user')



    <div class="testbox">
      <form action="{{ route('update-post', $post) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="banner">
          <h1>"Zdrava ishrana" - izmjeni post</h1>
        </div>

        <div class="item">
          <label for="title">Naslov posta<span>*</span></label>
          <input id="title" type="text" name="title" value="{{ $post->title }}" />
          @error('title')
            <div class="alert text-danger py-1">{{ $message }}</div>
          @enderror
        </div>
        <div class="item">
          <label for="content">Sadrzaj posta<span>*</span></label>
          <textarea name="content" id="content" cols="30" rows="10">{{ $post->content }}</textarea>

          @error('content')
            <div class="alert text-danger py-1">{{ $message }}</div>
          @enderror
        </div>

        <div class="file-field">
					<div class="btn btn-light btn-sm float-left">
						<span>Odaberite sliku</span>
                        <input type="file" name="image">
                        @error('image')
                            <div class="alert text-danger py-1">{{ $message }}</div>
                        @enderror
					</div>
		</div>

        <div class="btn-block">
          <button type="submit" >Potvrdi promjene</button>
        </div>
      </form>
    </div>

@endsection

@section('style_user')

<style>
      form, input, label {
      padding: 0;
      margin: 0;
      outline: none;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      font-family: "Roboto", sans-serif;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 30px;
      color: #fff;
      z-index: 2;
      line-height: 50px;
      }
      .testbox {
      width: 40%;
      margin: 20px auto;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px  #cc7a00;
      }
      .banner {
      position: relative;
      height: 200px;
      background-image: url("{{ asset("storage/img/registracija_kruske.jpg") }}");
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.2);
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      width: calc(100% - 10px);
      padding: 5px;
      }

      .item:hover p, .item:hover i, input:hover::placeholder {
      color: #cc7a00;
      }
      .item input:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0 #cc7a00;
      color: #cc7a00;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }

      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #cc7a00;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }

      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background: #cc7a00;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #ff9800;
      }

      @media (max-width: 900px) {
        .testbox{
          width:60%;
      }
      }

      @media (max-width: 568px) {
      .testbox{
          width:100%;
      }
      .name-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
   </style>

@endsection