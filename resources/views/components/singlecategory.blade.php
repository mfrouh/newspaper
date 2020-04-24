<div class="row">
    <div class="col-md-8 col-12 p-0">
        <x-mainarticle :article="$articles[0]" />
    </div>
    <div class="col-md-4 col-12">
        <x-normalarticle :article="$articles[1]" />
        <x-normalarticle :article="$articles[2]" />
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-4 col-12 p-0">
        <x-normalarticle :article="$articles[3]" />
        <x-normalarticle :article="$articles[4]" />
    </div>
    <div class="col-md-8 col-12">
        <x-lastmainarticle :article="$articles[5]" />
    </div>
</div>
