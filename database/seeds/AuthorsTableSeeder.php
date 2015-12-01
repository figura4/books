<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            'first_name' => 'Cory',
            'last_name' => 'Doctorow',
            'bio' => 'Cory Efram Doctorow (Toronto, 17 luglio 1971) è un blogger, giornalista e scrittore anglo-canadese. Lavora come co-editore del weblog Boing Boing. E\' un attivista a favore della liberalizzazione delle leggi sul copyright e sostenitore dell\'organizzazione Creative Commons, di cui utilizza le licenze per la pubblicazione dei suoi libri. Temi ricorrenti delle sue opere sono i DRM (Digital Rights Management), il file sharing e la post-scarcity economics.',
        ]);

        DB::table('authors')->insert([
            'first_name' => 'Warren',
            'last_name' => 'Ellis',
            'bio' => 'Warren Ellis è autore di fumetti, romanzi e programmi televisivi ed è famoso soprattutto per il contributo dato al dibattito su problemi socioculturali al quale partecipa attraverso scritti caustici e cinici nei quali affronti i tempi più disparati tra cui le nanotecnologie, la crionica e il progresso umano. Attualmente vive a Southend-on-Sea, in Inghilterra. Ellis è nato nell\'Essex il 16 febbraio 1968, circa 17 mesi prima che Neil Armstrong atterrasse sulla luna il 20 luglio del 1969 e ricorda la telecronaca televisiva di quell\'evento come se fosse ieri. Successivamente ha studiato al South East Essex Sixth Form College, meglio conosciuto come SEEVIC. Ha collaborato alla rivista universitaria di fumetti, Spike, insieme a Richard Easter che in seguito è diventato scrittore. Prima di dedicarsi a tempo pieno alla scrittura, Ellis ha gestito una libreria, un pub, ha lavorato nel settore fallimentare, in un negozio di dischi e ha fatto anche lo scaricatore.'
        ]);
    }
}
