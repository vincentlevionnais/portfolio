<h2>Contact</h2>

<div class=container>
  <div class="card">
    <h3>Où me trouver :</h3>

    <iframe class="map" src="https://api.jawg.io/maps/2413d200-a2e2-45b9-b504-4a7c82432fd6/acfa8fdb-0794-4547-8f28-3b39b7c38610.html?access-token=ZMea7w9Gy2eixtVL5UJFkyNnVyVnLZSn9qJ1YEGYxij64l1bhDubSiDhHAINmosd#12.2/48.110542/-1.665742"></iframe>

    <div class=contact-list>
      <ul>
        <li class="link"><i class="fab fa-github"></i> <a href="<?= $person[0]->getGithub();?>">Profil GitHub</a></li>
        <li class="link"><i class="fab fa-linkedin"></i> <a href="<?= $person[0]->getLinkedin();?>">Profil LinkedIn</a></li>
        <li class="link"><i class="fas fa-at"></i> <a href="mailto:<?= $person[0]->getMail();?>">Envoyer un e-mail</a></li>
        <li><i class="fas fa-map-marker-alt"></i> Rennes, France</li>
      </ul>
    </div>

  </div>
</div>