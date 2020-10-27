<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form class="" action="{{route('books.store')}}" method="post">
    @csrf
    @method('POST')

    <div class="">
      <label for="title">Titolo</label>
      <input type="text" name="title" value="" placeholder="Titolo" id="title">
    </div>

    <div class="">
      <label for="author">Autore</label>
      <input type="text" name="author" value="" placeholder="Autore" id="author">
    </div>

    <div class="">
      <label for="edition">Casa Editrice</label>
      <input type="text" name="edition" value="" placeholder="Casa Editrice" id="edition">
    </div>

    <div class="">
      <label for="genre">Genere</label>
      <input type="text" name="genre" value="" placeholder="Genere" id="genre">
    </div>

    <div class="">
      <label for="image">Immagine</label>
      <input type="text" name="image" value="" placeholder="Link Immagine" id="image">
    </div>

    <div class="">
      <label for="year">Anno di pubblicazione</label>
      <input type="date" name="year" value="" id="year">
    </div>

    <div class="">
      <label for="isbn">ISBN</label>
      <input type="text" name="isbn" value="" placeholder="ISBN" id="isbn">
    </div>

    <div class="">
      <label for="pages">Numero Pagine</label>
      <input type="number" name="pages" value="" placeholder="Numero pagine" id="pages">
    </div>

    <div class="">
      <input type="submit" name="" value="Salva">
    </div>

  </form>
</body>
</html>
