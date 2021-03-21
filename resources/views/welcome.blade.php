@extends('layouts.app')
@section('title','Régime Alimanter')    
@section('content')
    <header style="background-image: url('./images/bg.jpg')" id="home"> 
        <div class="overlay">
            <div class="container">
                <div class="header text-center">
                    <div class="display-5 text-center">
                        {{__('Bienvenue sur notre site Web Nous vous aidons à améliorer la vie')}}
                    </div>
                   <a href="#contact"><button class="btn btn-link rounded-pill ">{{__('Nous contacter')}}</button></a> 
                    </div>
             </div>
        </div>
    </header>
    <div class="about-us text-center" id="about">
        <div class="container">
            <div class="h2">{{__('Pourquoi les gens ont besoin de nous')}}</div>
            <div class="row">
                <div class="col-md-3 col-sm-2">
                    <div class="card text-center">
                        <i class="fas fa-utensils fa-3x"></i>
                        <h4 class="card-title">
                            {{__('La sensation de faim diminue ')}}
                        </h4>
                        <p class="card-text">
                            Les protéines ont un effet « coupe faim » naturel. Elles enlèvent l’envie de grignoter et ôtent la sensation de faim pendant plusieurs heures
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-2">
                    <div class="card text-center">
                        <i class="fas fa-utensils fa-3x"></i>
                        <h4 class="card-title">
                            {{__('Facilité')}}
                        </h4>
                        <p class="card-text">
                             Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-2">
                    <div class="card text-center">
                        <i class="fas fa-utensils fa-3x"></i>
                        <h4 class="card-title">
                            {{__('Rapidité et efficacité ')}}
                        </h4>
                        <p class="card-text">
                             Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-2">
                    <div class="card text-center">
                        <i class="fas fa-utensils fa-3x"></i>
                        <h4 class="card-title">
                            {{__('Simplicité')}}
                        </h4>
                        <p class="card-text">
                             Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="service" id="service">
        <div class="container">
            <div class="h2 text-center">{{__('Our Service')}}</div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="./images/image-1.jpg" class="card-img-top" alt="image">
                        <div class="card-body">
                          <h5 class="card-title">{{__('Personalized Nutrition Plan')}}</h5>
                          <p class="card-text">
                            Sometimes to change diet habits is sufficient for changing the whole lifestyle. Food for body can heal the whole personality by causing a behavioral change.
                          </p>
                          
                        </div>
                      </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="./images/image-2.jpg" class="card-img-top" alt="image">
                        <div class="card-body">
                          <h5 class="card-title">{{__('Personalized Exercise Program')}}</h5>
                          <p class="card-text">
                            Life is motion and you can feel your every muscle when you are working out. Of course you have to know which exercises are useful for which groups of muscles. And that’s it.
                        </p>
                          
                        </div>
                      </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="./images/image-3.jpg" class="card-img-top" alt="image">
                        <div class="card-body">
                          <h5 class="card-title">{{__('Individual Routine Program')}}</h5>
                          <p class="card-text">
                            The best soluton of course is combining diet improvements together with workout plan and regular gym visits. It should take into account your individual particularities.                        </p>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact" id="contact" style="background-image:url('./images/bg-2.jpg')">
        <div class="container">
            <div class="h2 text-center">Conatact Us</div>
                <form action="/send" method="POST">
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationServer01">Nom</label>
                        <input type="text" class="form-control"  name="first_name" >
                        <div class="valid-feedback">
                          Looks good!
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="validationServer02">Prénom</label>
                        <input type="text" class="form-control" name="last_name" >
                      </div>
                    </div>
                      <div class="form-group">
                          <label for="email">Email</label>
                          <input id="email" class="form-control  @error('email') is-invalid @enderror " required type="email" name="mail">
                          @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      </div>
                      <div class="form-group mb-3">
                        <label for="email">Message</label>
                        <textarea class="form-control @error('message') is-invalid @enderror"  required col="5" name="message"></textarea>
                         @error('message')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      </div>
                    <button class="btn btn-primary" type="submit">Send Message</button>
                  </form>
        </div>
    </div>
@endsection


