<!--
        function validation()
        {
                var err=false;
                if (!document.form.Nom.value) {
                        err=true;
                }
                if (!document.form.Prenom.value) {
                        err=true;
                }
                if (!document.form.AdresseElectronique.value) {
                        err=true;
                }
                if (!document.form.Grammaire.value) {
                        err=true;
                }
                if (err) {
                        alert("Les champs suivant sont obligatoire :\n- NOM\n- Prénom\n- Adresse électronique\n- Nombre d'années de grammaire");
                        return false;
                }
                rep=confirm("Etes vous sûr(e) ?");
                return rep;
        }
-->
