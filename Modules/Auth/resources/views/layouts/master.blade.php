<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js', ...\Nwidart\Modules\Module::getAssets()])

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons|Material+Icons+Outlined|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined|Material+Symbols+Sharp" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/animate.css@^4.0.0/animate.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/quasar@2.16.4/dist/quasar.rtl.prod.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- example of injection point where you write your app template -->
<div id="q-app" data-picker>
   <q-layout>
       <q-page-container>
           <q-page>
               {{ $slot }}
           </q-page>
       </q-page-container>
   </q-layout>
</div>

<!-- Add the following at the end of your body tag -->
<script src="https://cdn.jsdelivr.net/npm/vue@3/dist/vue.global.prod.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quasar@2.16.4/dist/quasar.umd.prod.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quasar@2.16.4/dist/icon-set/svg-material-icons.umd.prod.js"></script>

<script>
    /*
       Example kicking off the UI. Obviously, adapt this to your specific needs.
       Assumes you have a <div id="q-app"></div> in your <body> above
      */
    const app = Vue.createApp({
        setup () {
            return {}
        }
    })

    app.use(Quasar, {
        config: {
            dark: true,
            /*
            brand: {
              // primary: '#e46262',
              // ... or all other brand colors
            },
            notify: {...}, // default set of options for Notify Quasar plugin
            loading: {...}, // default set of options for Loading Quasar plugin
            loadingBar: { ... }, // settings for LoadingBar Quasar plugin
            // ..and many more (check Installation card on each Quasar component/directive/plugin)
            */
        }
    })
    Quasar.IconSet.set(Quasar.IconSet.svgMaterialIcons)
    app.mount('#q-app')
</script>
</body>
</html>
