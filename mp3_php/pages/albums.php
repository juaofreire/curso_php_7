<h1>Álbum</h1>

<a href="?page=new_album" class="btn btn-success">Adicionar Novo Álbum</a>

<hr>

<div class="row">
    <?php
        $albums = getAlbums();

        //for ($i = 0; $i < 12; $i++):
        foreach ($albums as $album) :

        $infoAlbum = explode('/', $album);
        $nameAlbum = $infoAlbum[1];
        //$imgAlbum = $album . '/' . $nameAlbum . '.jpg';
        $imgAlbum = "{$album}/{$nameAlbum}.jpg";
    ?>
    <div class="col-3 album">
        <a href="?page=musics&album=<?=$nameAlbum?>">
            <img src="<?=$imgAlbum?>" alt="<?=$nameAlbum?>" class="img-album">
            <h4><?=$nameAlbum?></h4>
        </a>
    </div>
    <?php
        //endfor;
        endforeach;
    ?>
</div>