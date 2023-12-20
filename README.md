# Drive Storage

<p>
	Por lo general, cuando queremos trabajar con archivos e imágenes con laravel, se usa la carpeta
	**storage** del proyecto para su almacenamiento. Al no hacerlo, habrán complicaciones para mostrar por pantalla las imágenes y archivos.
</p> 
<p>
	Ahora, con este proyecto aprenderás a usar otras rutas o discos para almacenar las imágenes y archivos.  Para ello, agregaremos un nuevo *disk* en el archivo ```filesystems```. 
</p>

<p>
	La ruta del archivo es:
</p>

```
config/filesystems.php
```

<p>
	Además, se usará:
</p>

1. Componentes
2. Rutas dinámicas con parámetros opcionales para crear archivos y carpetas desde cualquier ruta.
3. Barras diagonales codificadas.
4. Nuestros propios discos.

## Configuración

<p>
	Esta es mi configuración:
</p>

```
'system' => [
    'driver' => 'local',
    'root' => 'C:\\Path\\to\\files',
    'url' => env('APP_URL').'/files',
    'visibility' => 'public'
]
```

<p>
	Como puede observar, se usará variables de entornos, así que debes crear un archivo *.env* en la raíz del proyecto y agregar lo siguiente:
</p>

```
APP_URL=nombre del proyecto
```

## Carpeta public de laravel
<p>
	Se sabe que por seguridad, la única carpeta que se verá desde el navegador será la carpeta public. Así que se debe crear, lo que laravel llama, *enlaces simbolicos*
</p>

## Creando enlace simbolico 

```
ln -s C:\\Path\\to\\files C:\\laragon\\www\\files-app-laravel\\public
```

## A Tener en cuenta
<p>
	como pueden ver, en este caso, la carpeta que contendrá todo, será la carpeta files. Es por eso que en la configuración del disk se agrega */files* al lado de la variable de entorno. Al momento de usar el *Storage::disk("system")->url()* irá directo al carpeta files que está dentro de la carpeta public.
</p>


## Rutas
<p>
	Para crear rutas dinámicas, es necesarios que los parámetros sean opcionales; como este caso:
</p>

```
Route::get("/{directories?}", [DirectoriesController::class, 'show'])
		->name('directory.show')
		->where('directories', '.*'); 
```