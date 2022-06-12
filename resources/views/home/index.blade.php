@extends('layouts.base')

@section('content')
    <header>
        <div class="container">
            <a href="{{ route('dashboard') }}">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAACGElEQVRoge3YvWsTcRzH8VfboKIiSBVEVJAOjiJKRRBRFwU3lw5uUvon2KGji/9CBxcRdNHJRdGCVHwapIuTICriEyKIgthK43C/mFyappfkLnep94aDkHwfPp/7/e6bu6MkEfswh/vh80ByEp9QDcdXnMlVUYcMYQZ/RAbuhKMavpsJMYVmG26JRC/jCoZFwqfFzW3PSeOaHMQr9W10tkXMKXwOMW9xpG/qEnIBP0UCX2B/m9i9eBpif+Fiw2/VVY7MqYi2T63hNWxOkLcRsw15s9ggJyN78Fj9zE52UWMy5FbxxErhmRs5gY+hyTsc7aHWIbzWegUyMzKES1gKDe5iNIW6o6FWTfh06JWJkebRehkjKdYfCTWXQ4/bMjByAC9D0e84n2bxJs7hmwwu9gn8CAUXMJZW4TaMhV41IxO9FGserdexpUeBnbAJVxv610Z0R+zEg1BgSXTx5cUUfgct89idNPE4PoTE9ziWhboOOYw3Ik1fcHqthCkshoSH2JWlug7ZgXviu2TFXfRW3BSfFJX+aUxMRVzjDZH2fzxXH619u1Hrkpq+mtZnRM8KRNtpAeO5SOuOcZHmxdUCBmVFYgy3CBxISiNFY90YSfO/otsBkcqroXJF2pD0DKc64tfNipRGikZppGiURopGaaRolEaKRmmkaJRGisa6MdLqIajI77QaiWlvtSKP+iSkF+bzFlDy3/AXWYWcPdCUBCUAAAAASUVORK5CYII="/>
                <div>Home</div>
            </a>
        </div>
        <script src="//unpkg.com/alpinejs" defer></script>
        <div>
            <h1 style="text-align: center;color:#82adfd; font-size: 50px"><img style="color: color:#82adfd" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAABmJLR0QA/wD/AP+gvaeTAAADpklEQVRYhe2Yz28bRRiG35lZd3dnjBFCybpQAgoCpWpa1II40xMqAYQP6bGUPwFFQhSE5EvEjd57aDkhVRG/CgXlBGcO0MYtELVJLxhiu1Sq69mxvTszHFCipt51mt1gcshzG+3MN887o93RDrDLIf/n5K9Uf3BEV044DiatIYcc5rxMKJ2K4/7E1/MzYwDgjEKkcuaLxzW8KQszRRg96IC+YGEPmkgFBa8Qci5iwYtFLvx9PvexdLW2MXbHBB9cDUbpUUrZIW30c9bC832363u+U3ykyAX3ied64IKDUloaVnfbgjPvf/tYAZg0DJMAO+JQdgzUPq8j9Qzd5/QF533OueBcFITw4XoePNcDIXCzBN+2IKPkjif4XSGKTAgufM8jnHP4vgtCqAOAZxHZMUEAePHY0Ud3UmIYdFQTZWVPMC8j+Q6mYYyB6nahQoUwVJiYODDQZySC/X4fSimoUEGqUMuOVEopEkWxSxlrUkqXo37/+H8qaI1Ft9/7VyKUUKEKpVRdpZRvrQZlrE4JqUVR9JOFXaEaq3c9cf3H6vEuALz5wWWbVDeX4OrqreheR4YqDFkcxx6ltEkZWdax/dkY86ux+jffLSwvVF+7k3WOXIL1+p8FWHuKgfwe/B3cOnfupShPvSRyb/Glj1+/tBMiaez6z8yeYF72BPOy6wVHehZXqovjOtJzDmOzxugnrSWGMVo3Rn9mTOJBMjrBtz66fNLG5vz+ctkJgjGXcwHAQkr5bKt1+721tTWDhB1NFMySdCs5Sp0Lh6enebEoNj0rlUoolUru0xNPJY4dEMyaNI1KdXHcxuZ8ktwmkUJha8E8SdPQkZ7bXy47w+SGsbESleriOCzNnDSNAmOz5WAs0y/nJkEd6bkgCDInTSPW5gmfZ6+5IZg36U6htQYhtLve3hDMmzQNxlg9DOVD95dSgjFaX29nPkkeTJraz8QLzWar97B1m41WT1t7cUAwb9I0qMM+WfurEUu5de1Op4NmqxUZFp0dEMybNI0vq682CfDOUu1aOEyy0+mgdu16aI0+/U31jdsDgnmTDpWcP7FgY3P6yi9L8uaNlV673YbWBlobtNtt3Lyx0rt6pSZNHJ/6an7m8/vHbrphrXz4/Sxx6KdHDk9zIZJfmPWkScW24sSZ78ZcRt6llJ7UWh8AAMbYH9rai4ZFZ+9fuUTBdUkLXAiCcWc8GHOFKAIApOyg2Wj1Go1mDJi3tyuXlcQ76ixJ99it/AObzekR0khohAAAAABJRU5ErkJggg=="/>
                Youtunes <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAABmJLR0QA/wD/AP+gvaeTAAADpklEQVRYhe2Yz28bRRiG35lZd3dnjBFCybpQAgoCpWpa1II40xMqAYQP6bGUPwFFQhSE5EvEjd57aDkhVRG/CgXlBGcO0MYtELVJLxhiu1Sq69mxvTszHFCipt51mt1gcshzG+3MN887o93RDrDLIf/n5K9Uf3BEV044DiatIYcc5rxMKJ2K4/7E1/MzYwDgjEKkcuaLxzW8KQszRRg96IC+YGEPmkgFBa8Qci5iwYtFLvx9PvexdLW2MXbHBB9cDUbpUUrZIW30c9bC832363u+U3ykyAX3ied64IKDUloaVnfbgjPvf/tYAZg0DJMAO+JQdgzUPq8j9Qzd5/QF533OueBcFITw4XoePNcDIXCzBN+2IKPkjif4XSGKTAgufM8jnHP4vgtCqAOAZxHZMUEAePHY0Ud3UmIYdFQTZWVPMC8j+Q6mYYyB6nahQoUwVJiYODDQZySC/X4fSimoUEGqUMuOVEopEkWxSxlrUkqXo37/+H8qaI1Ft9/7VyKUUKEKpVRdpZRvrQZlrE4JqUVR9JOFXaEaq3c9cf3H6vEuALz5wWWbVDeX4OrqreheR4YqDFkcxx6ltEkZWdax/dkY86ux+jffLSwvVF+7k3WOXIL1+p8FWHuKgfwe/B3cOnfupShPvSRyb/Glj1+/tBMiaez6z8yeYF72BPOy6wVHehZXqovjOtJzDmOzxugnrSWGMVo3Rn9mTOJBMjrBtz66fNLG5vz+ctkJgjGXcwHAQkr5bKt1+721tTWDhB1NFMySdCs5Sp0Lh6enebEoNj0rlUoolUru0xNPJY4dEMyaNI1KdXHcxuZ8ktwmkUJha8E8SdPQkZ7bXy47w+SGsbESleriOCzNnDSNAmOz5WAs0y/nJkEd6bkgCDInTSPW5gmfZ6+5IZg36U6htQYhtLve3hDMmzQNxlg9DOVD95dSgjFaX29nPkkeTJraz8QLzWar97B1m41WT1t7cUAwb9I0qMM+WfurEUu5de1Op4NmqxUZFp0dEMybNI0vq682CfDOUu1aOEyy0+mgdu16aI0+/U31jdsDgnmTDpWcP7FgY3P6yi9L8uaNlV673YbWBlobtNtt3Lyx0rt6pSZNHJ/6an7m8/vHbrphrXz4/Sxx6KdHDk9zIZJfmPWkScW24sSZ78ZcRt6llJ7UWh8AAMbYH9rai4ZFZ+9fuUTBdUkLXAiCcWc8GHOFKAIApOyg2Wj1Go1mDJi3tyuXlcQ76ixJ99it/AObzekR0khohAAAAABJRU5ErkJggg=="/></h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="{{ route('albums.index') }}">Albums</a></li>
            <li><a href="{{ route('artists.index') }}" >Artists</a></li>
            <li><a href="{{ route('tracks.index') }}">Tracks</a></li>
        </ul>
    </nav>
    <main>
        <article>
            <h3>Most popular albums </h3>
            <a href="{{ url('http://127.0.0.1:8000/albums/194') }}"><img src="https://static.fnac-static.com/multimedia/FR/Images_Produits/FR/fnac.com/Visual_Principal_340/6/0/4/4943674063406/tsp20120924121513/By-the-way.jpg" width="190" height="100" alt="Red hot"></a>
            <a href="{{ url('http://127.0.0.1:8000/albums/321') }}"><img src="https://media.s-bol.com/2Rg2pLD6O0NJ/1200x1200.jpg" width="190" height="190"></a>
            <a href="{{ url('http://127.0.0.1:8000/albums/239') }}"><img src="https://static.fnac-static.com/multimedia/FR/Images_Produits/FR/fnac.com/Visual_Principal_340/6/7/4/0602517646476/tsp20120921184250/War-Remasterise.jpg" width="190" height="190"></a>
            <a href="{{ url('http://127.0.0.1:8000/albums/73') }}"> <img src="https://static.fnac-static.com/multimedia/Images/FR/NR/26/4c/25/2444326/1540-1/tsp20190625113241/Unplugged.jpg" width="190" height="190"></a>
            <a href="{{ url('http://127.0.0.1:8000/albums/89') }}"><img src="https://media.s-bol.com/rmGvY3EJ7Lxw/1200x1181.jpg" width="190" height="190"></a><br>
        </article>
        <article>

            <h3>What's that?</h3>
            <p>Try to guess what's the number is refering to!</p>
            <div x-data="{ open: false }">
                <button @click="open = true" style="width: 90px; display: inline-block">{{$nbr = DB::table('albums')->count()}}</button>
                <span x-show="open" style="display: inline-block">
                The number of albums on Youtunes
                </span>
            </div>
            <div x-data="{ open: false }">
               <button @click="open = true" style="width: 90px; display: inline-block">{{$nbr = DB::table('artists')->count()}}</button>
                <span x-show="open" style="display: inline-block">
                The number of artists on Youtunes
                </span>
            </div>
            <div x-data="{ open: false }">
                <button @click="open = true" style="width: 90px; display: inline-block">{{$nbr = DB::table('tracks')->count()}}</button>
                <span x-show="open" style="display: inline-block">
                The number of tracks on Youtunes
                </span>
            </div>
        </article>

        @can('is-admin', Auth::user())
            <h6>Other categories</h6>
            <ul>
                <li style="display: inline"><a href="{{ route('customers.index') }}">Customers</a></li>
                <li style="display: inline"><a href="{{ route('employees.index') }}">Employees</a></li>
                <li style="display: inline"><a href="{{ route('invoices.index') }}">Invoices</a></li>
            </ul>
        @endcan
    </main>
    <footer>
        <p>©Copyright Youtunes. All rights reserved.</p>
    </footer>
@endsection
