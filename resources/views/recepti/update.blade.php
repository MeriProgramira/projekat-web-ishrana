@extends('layouts.user')
@section('content_user')



    <div class="testbox">
        <form action="{{ route('update-recept', $recept) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="banner">
          <h1>"Zdrava ishrana" - izmjeni recept</h1>
        </div>

        <div class="item">
          <label for="title">Naziv recepta<span>*</span></label>
          <input id="title" type="text" name="title" value="{{ $recept->title }}" />
          @error('title')
            <div class="alert text-danger py-1">{{ $message }}</div>
          @enderror
        </div>
        <div class="item">
            <label for="complexity">Slozenost recepta<span>*</span></label>
            <select class="selectpicker" name="complexity" data-style="form-control btn-secondary">
                <option value="lagano" @if(old('complexity') == 'lagano') selected @endif >Lagano</option>
                <option  value="srednje zahtjevno" @if(old('complexity') == 'srednje zahtjevno') selected @endif>Srednje zahtjevno</option>
                <option  value="slozeno" @if(old('complexity') == 'slozeno') selected @endif>Slozeno</option>
            </select>
            @error('complexity')
              <div class="alert text-danger py-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="item">
            <label for="short_description">Kratak opis recepta<span>*</span></label>
            <input id="short_description" type="text" name="short_description" value="{{ $recept->short_description }}" />
            @error('short_description')
              <div class="alert text-danger py-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="item">
            <label for="ingredients">Sastojci<span>*</span></label>
            <input id="ingredients" type="text" name="ingredients" value="{{ $recept->ingredients }}" />
            @error('ingredients')
              <div class="alert text-danger py-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="item">
            <label for="dish_type">Vrsta jela<span>*</span></label>
            <select class="selectpicker" name="dish_type" data-style="form-control btn-secondary">
                <option value="predjelo">Predjelo</option>
                <option value="glavno_jelo">Glavno jelo</option>
                <option value="desert">Desert</option>
                <option value="hljeb_peciva">Hljeb i peciva</option>
                <option value="salate">Salata</option>
                <option value="pica">Pića</option>
                <option value="zimnica">Zimnica</option>
            </select>
            @error('dish_type')
              <div class="alert text-danger py-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="item">
          <label for="preparation">Opis pripreme <span>*</span></label>
          <textarea name="preparation" id="preparation" cols="30" rows="10">{{ $recept->preparation }}</textarea>

          @error('preparation')
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
