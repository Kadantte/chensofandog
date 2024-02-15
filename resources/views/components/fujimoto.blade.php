<?php 
  $birthDate = "10/10/1992";
  $birthDate = explode("/", $birthDate);
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
?> 

<script>
  [...document.querySelectorAll('[data-bs-toggle="tooltip"]')]
  .forEach(el => new bootstrap.Tooltip(el))
</script>

<section id="fujimoto">
  <div class="container-fluid text-center">
      <h6 class="text-center pt-2" id="sect-title">Tatsuki Fujimoto</h6>

      <div class="container-fluid">
        <div class="row mt-4">
          <div class="col-md-3">
            <img src="{{asset('/images/imgsrc/tatsfuji.jpg')}}" class="rounded float-start mt-4 ms-5" alt="Tatsuki Fujimoto"> 
          </div>
          <div class="col-md-5 offset-md-2 mt-1 ml-5">
          <h6 class="mb-3"><u>Becoming Fujimoto Sensei</u></h6>
            <p class="small"><strong>Tatsuki Fujimoto</strong> is a currently active mangaka best known for <u>Fire Punch</u> and <u>Chainsaw Man</u>. Fujimoto's works are noted for referencing his love of movies, a distinctively "scratchy" artstyle with high levels of detail, and writing rich worlds with distinctive characters. They're also well-known for having a commonality of existential dread and nihilistic despair... and yet a surprising amount of hope when faced against such overwhelming odds and sadness.</p>
            <p class="small"> Fujimoto started drawing at an early age. He had no preparatory schools available near his home, so he went to painting classes and graduated in Western painting from Tohoku University of Art and Design in Yamagata, Yamagata Prefecture in 2014. After graduating, he made several one shots, participated in Manga Awards Contents, winning some of them, and was eventually noticed by ONE and Sui Ishida.  He made his official debut in Jump SQ.19 with "Shikaku" in 2014 and in the following year, he published "Yogen no Nayuta" in Jump SQ. </p> 
            <p class="small"> Tatsuki made his first serialization with <u>Fire Punch</u> in 2016 which ran for eight volumes and was published on the Jump+ site. After his Fire Punch serialization ended, Tatsuki published a new oneshot for Jump SQ titled Imouto no Ane. In December 2018, he started a new serialization <u>Chainsaw Man</u> in Weekly Shonen Jump. It's popularity has thrived across many streaming platforms around the world. A two-volume collection of Fujimoto's previous one-shots, entitled <u>Tatsuki Fujimoto Before Chainsaw Man</u>, was released at the end of 2021.</p> 
          </div> 
         </div>

          <div class="row p-2 small" id="persbox">
            <div class="col-4 ms-0 mt-3 pb-2"><u>Personal Info</u></div> 
              <div class="persinfo">
                <h6 class="float-start offset-md-1 fw-bold">Born: October 10, 1992<br>Age:&nbsp;<?=$age?>&nbsp;Years Old<br>Location: Nikaho, Akita Prefecture, Japan<br>Awards: Shogakukan Manga Award (2020)<br>Harvey Awards (2021, 2022)</h6> 
              </div>
          </div>
      </div>   

  </div>
</section>

<style>
#fujimoto {
  background-color: #E8DCB8; 
}

.rounded {
  height: 18.75rem; 
  padding-left: 100px;
}

img.rounded:hover {
  transform: scale(1.1); 
  animation: bloom ease-in-out .95s infinite; 
} 
  @keyframes bloom {
    0% {
      filter: contrast(100%);
    }
    25% {
      filter: contrast(130%);
    }
    50% {
      filter: contrast(160%);
    }
    100% {
      filter: contrast(100%);
    }
  }

#persbox {
  margin-top: -110px; 
  margin-left: 25px; 
}
</style>
