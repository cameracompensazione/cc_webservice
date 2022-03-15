
public class DatiManualiDaInviare {

    String tipoFattura, partitaIvaCreditore, partitaIvaDebitore, dataFattura, numeroFattura;
    double importoTotale, importoResiduo;
    double residuo;

    public DatiManualiDaInviare(String tipoFattura,
            String partitaIvaCreditore,
            String partitaIvaDebitore,
            String dataFattura,
            String numeroFattura,
            double importoTotale,
            double importoResiduo) {
        this.tipoFattura = tipoFattura;
        this.partitaIvaCreditore = partitaIvaCreditore;
        this.partitaIvaDebitore = partitaIvaDebitore;
        this.dataFattura = dataFattura;
        this.numeroFattura = numeroFattura;
        this.importoTotale = importoTotale;
        this.importoResiduo = importoResiduo;
    }

    public static DatiManualiDaInviare[] getElencoDatiManualiEsempio() {
        DatiManualiDaInviare[] retVal = {
            new DatiManualiDaInviare(
            "a",
            "01651210831",
            "IT04507990150",
            "2022-03-01",
            "32ddf",
            98765.43,
            1234.56
            ),
            new DatiManualiDaInviare(
            "v",
            "03671960833",
            "IT04507990150",
            "2022-01-01",
            "12/2022",
            1000.89,
            500.12
            )
        };
        return retVal;
    }
}
