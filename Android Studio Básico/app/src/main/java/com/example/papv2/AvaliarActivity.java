package com.example.papv2;

import androidx.appcompat.app.AppCompatActivity;
import androidx.appcompat.widget.AppCompatSpinner;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.LinearLayout;
import android.widget.Toast;

import java.util.ArrayList;
import java.util.List;

public class AvaliarActivity  extends AppCompatActivity implements View.OnClickListener {

    LinearLayout layoutList;
    Button buttonSubmitList;

    List<String> teamList = new ArrayList<>();
    ArrayList<Avaliacoes> cricketersList = new ArrayList<>();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_avaliar);

        layoutList = findViewById(R.id.layout_list);
        buttonSubmitList = findViewById(R.id.button_submit_list);

        buttonSubmitList.setOnClickListener(this);


        teamList.add("1ª Lugar");
        teamList.add("2ª Lugar");
        teamList.add("3ª Lugar");
        teamList.add("4ª Lugar");
        teamList.add("5ª Lugar");
        teamList.add("6ª Lugar");

        addView();

    }

    @Override
    public void onClick(View v) {

        switch (v.getId()) {

            case R.id.button_submit_list:

                if (checkIfValidAndRead()) {

                    Intent intent = new Intent(AvaliarActivity.this, MainActivity.class);
                    Bundle bundle = new Bundle();
                    bundle.putSerializable("list", cricketersList);
                    intent.putExtras(bundle);
                    startActivity(intent);

                }

                break;

        }


    }

    private boolean checkIfValidAndRead() {
        cricketersList.clear();
        boolean result = true;

        for (int i = 0; i < layoutList.getChildCount(); i++) {

            View cricketerView = layoutList.getChildAt(i);

            EditText editTextName = (EditText) cricketerView.findViewById(R.id.edit_cricketer_name);
            AppCompatSpinner spinnerTeam = (AppCompatSpinner) cricketerView.findViewById(R.id.spinner_team);

            Avaliacoes avaliacoes = new Avaliacoes();

            if (!editTextName.getText().toString().equals("")) {
                avaliacoes.setAvaliacoesDorsal(editTextName.getText().toString());
            } else {
                result = false;
                break;
            }

            if (spinnerTeam.getSelectedItemPosition() != 0) {
                avaliacoes.setClassificacoes(teamList.get(spinnerTeam.getSelectedItemPosition()));
            } else {
                result = false;
                break;
            }

            cricketersList.add(avaliacoes);

        }

        if (cricketersList.size() == 0) {
            result = false;
            Toast.makeText(this, "Tens que preencher os dados todos!", Toast.LENGTH_SHORT).show();
        } else if (!result) {
            Toast.makeText(this, "Enter All Details Correctly!", Toast.LENGTH_SHORT).show();
        }


        return result;
    }

    private void addView() {

        final View cricketerView = getLayoutInflater().inflate(R.layout.addavaliacoes, null, false);

        EditText editText = (EditText) cricketerView.findViewById(R.id.edit_cricketer_name);
        AppCompatSpinner spinnerTeam = (AppCompatSpinner) cricketerView.findViewById(R.id.spinner_team);


        ArrayAdapter arrayAdapter = new ArrayAdapter(this, android.R.layout.simple_spinner_item, teamList);
        spinnerTeam.setAdapter(arrayAdapter);


        layoutList.addView(cricketerView);

    }


}