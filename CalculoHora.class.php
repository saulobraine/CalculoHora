<?php

/**
 * CalculaHora [ TIPO ]
 *
 * <b> Descricao: </b>
 * Calcula horas no PHP
 * 
 * @copyright (c) 2016, Braine, Saulo
 */
class CalculoHora {

    private $PrimeiraHora;
    private $PrimeiraHoraOut;
    private $SegundaHora;
    private $SegundaHoraOut;
    private $HoraFinal;
    private $DiasAContar;

    public function AddHora($PrimeiraHora, $SegundaHora) {
        // Armazena os dados recebidos pela instância
        $this->PrimeiraHora = $PrimeiraHora;
        $this->PrimeiraHoraOut = $PrimeiraHora;
        $this->SegundaHora = $SegundaHora;
        $this->SegundaHoraOut = $SegundaHora;

        // Separa Hora, Minuto e Segundo
        $this->PrimeiraHora = explode(":", $this->PrimeiraHora);
        $this->SegundaHora = explode(":", $this->SegundaHora);

        if (($this->PrimeiraHora[0] > 23) || ($this->PrimeiraHora[1] > 59) || ($this->PrimeiraHora[2] > 59) ||
                ($this->SegundaHora[0] > 23) || ($this->SegundaHora[1] > 59) || ($this->SegundaHora[2] > 59)):
            return "<div class='alert alert-danger'> <strong> Digite uma data no formato H:m:s (Horas, minutos, segundos), e no máximo 23:59:59 </strong> </div>";
        else:
            if ($this->SegundaHora[0] < 1):
                // Soma os minutos e segundos apartir da PrimeiraHora e SegundaHora
                $this->HoraFinal = date('H:i:s', strtotime("+ {$this->SegundaHora[1]} minutes {$this->SegundaHora[2]} seconds", strtotime($this->PrimeiraHoraOut)));
                // Retorna o HoraFinal
                return $this->HoraFinal;
            else:
                // Soma as horas, minutos e segundos  apartir da PrimeiraHora e SegundaHora 
                $this->HoraFinal = date('H:i:s', strtotime("+ {$this->SegundaHora[0]} hours {$this->SegundaHora[1]} minutes {$this->SegundaHora[2]} seconds", strtotime($this->PrimeiraHoraOut)));
                // Retorna o HoraFinal
                return $this->HoraFinal;
            endif;
        endif;
    }

    public function SubtraiHora($PrimeiraHora, $SegundaHora) {
        // Armazena os dados recebidos pela instância
        $this->PrimeiraHora = $PrimeiraHora;
        $this->PrimeiraHoraOut = $PrimeiraHora;
        $this->SegundaHora = $SegundaHora;
        $this->SegundaHoraOut = $SegundaHora;

        // Separa Hora, Minuto e Segundo
        $this->PrimeiraHora = explode(":", $this->PrimeiraHora);
        $this->SegundaHora = explode(":", $this->SegundaHora);

        if (($this->PrimeiraHora[0] > 23) || ($this->PrimeiraHora[1] > 59) || ($this->PrimeiraHora[2] > 59) ||
                ($this->SegundaHora[0] > 23) || ($this->SegundaHora[1] > 59) || ($this->SegundaHora[2] > 59)):
            return "<div class='alert alert-danger'> <strong> Digite uma data no formato H:m:s (Horas, minutos, segundos), e no máximo 23:59:59 </strong> </div>";
        else:
            if ($this->SegundaHora[0] == 00):
                // Subtrai os minutos e segundos apartir da PrimeiraHora e SegundaHora
                $this->HoraFinal = date('H:i:s', strtotime("- {$this->SegundaHora[1]} minutes - {$this->SegundaHora[2]} seconds", strtotime($this->PrimeiraHoraOut)));
                // Retorna o HoraFinal
                return $this->HoraFinal;
            else:
                // Soma as horas, minutos e segundos  apartir da PrimeiraHora e SegundaHora 
                $this->HoraFinal = date('H:i:s', strtotime("- {$this->SegundaHora[0]} hours - {$this->SegundaHora[1]} minutes - {$this->SegundaHora[2]} seconds", strtotime($this->PrimeiraHoraOut)));
                // Retorna o HoraFinal
                return $this->HoraFinal;
            endif;
        endif;
    }

    public function ExibeDiferencaHora($PrimeiraHora, $SegundaHora) {
        // Armazena os dados recebidos pela instância
        $this->PrimeiraHora = $PrimeiraHora;
        $this->PrimeiraHoraOut = $PrimeiraHora;
        $this->SegundaHora = $SegundaHora;
        $this->SegundaHoraOut = $SegundaHora;

        // Separa Hora, Minuto e Segundo
        $this->PrimeiraHora = explode(":", $this->PrimeiraHora);
        $this->SegundaHora = explode(":", $this->SegundaHora);

        if (($this->PrimeiraHora[0] > 23) || ($this->PrimeiraHora[1] > 59) || ($this->PrimeiraHora[2] > 59) ||
                ($this->SegundaHora[0] > 23) || ($this->SegundaHora[1] > 59) || ($this->SegundaHora[2] > 59)):
            return "<div class='alert alert-danger'><strong> Digite uma data no formato H:m:s (Horas, minutos, segundos), e no máximo 23:59:59 </strong> </div>";
        else:
            $this->HoraFinal = date('H:i:s', strtotime("- {$this->PrimeiraHora[0]} hours - {$this->PrimeiraHora[1]} minutes - {$this->PrimeiraHora[2]} seconds", strtotime($this->SegundaHoraOut)));
            return "A diferença de tempo entre {$this->PrimeiraHoraOut} e {$this->SegundaHoraOut} é {$this->HoraFinal}";
        endif;
    }

    public function AddDia($Hora, $QuantosDias) {

        $this->PrimeiraHora = $Hora;
        $this->DiasAContar = $QuantosDias;

        $this->HoraFinal = date('d/m H:i:s', strtotime("+ $this->DiasAContar days", strtotime($this->PrimeiraHora)));

        return $this->HoraFinal;
    }

}
