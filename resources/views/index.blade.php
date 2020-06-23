<form action="{{ route('main.menu.store')}}" method="post">
    @csrf

    <div>

        <label>Jmeno menu</label>
        <input type="text" name="name">

    </div>

    <div>
        <label>Rodič</label>
        <select name="parent_ID">
        <option selected disabled>Vyberte rodiče</option>
        @foreach($allMenus as $key => $value)
            <option value="{{ $key }}">{{ $value}}</option>
        @endforeach
    </select>
    </div>

    <div>
          <button class="btn btn-success">Uložit</button>
    </div>
 </form>


{{-- Pro vykreslení menu voláme komponentu --}}
<x-menu />
