package com.example.papv2;

import java.io.Serializable;

public class Avaliacoes implements Serializable {

    public String avaliacoesDorsal;
    public String classificacoes;

    public Avaliacoes() {

    }

    public Avaliacoes(String avalicoesDorsal, String classificacoes) {
        this.avaliacoesDorsal = avalicoesDorsal;
        this.classificacoes = classificacoes;
    }

    public String getAvaliacoesDorsal() {
        return avaliacoesDorsal;
    }

    public void setAvaliacoesDorsal(String avaliacoesDorsal) {
        this.avaliacoesDorsal = avaliacoesDorsal;
    }

    public String getClassificacoes() {
        return classificacoes;
    }

    public void setClassificacoes(String classificacoes) {
        this.classificacoes = classificacoes;
    }
}