
import com.google.gson.Gson;
import com.google.gson.JsonElement;
import com.google.gson.JsonObject;
import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.OutputStream;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;
import java.util.Base64;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 * Esempio di utilizzo delle API di Camera di Compensazione per l'invio delle fatture da compensare
 */
public class TestApiJava {

    public static void main(String[] args) {
        try {
            TestApiJava main = new TestApiJava();
            JsonObject jsonObj = main.getJwt();
            String jwt = jsonObj.get("jwt").getAsString(); //To fetch the values from json object
//            System.out.println("jwt: " + jwt);
            if (jwt != null && !jwt.isEmpty()) {
                Dati[] datiProva = Dati.creaEsempio();
                for (Dati fattura : datiProva) {
                    main.sendFattura(jwt,
                            fattura.tipoFattura,
                            fattura.nomeFile,
                            Base64.getEncoder().encodeToString(fattura.contenuto.getBytes()),
                            fattura.residuo);
                }
            }
        } catch (IOException ex) {
            Logger.getLogger(TestApiJava.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    void sendFattura(String jwt, String tipoFattura, String nomeFile, String cont_b64, double residuo) throws IOException {
        HttpURLConnection con = createConnection(new URL("https://webapp.cameracompensazione.it/webservices/"));
        String jsonOp = "{"
                + "\"op\": \"ins_dati\",\n"
                + "\"jwt\": \"" + jwt + "\",\n"
                + "\"dati\": {\n"
                + "\"tipo_fattura\": \"" + tipoFattura + "\",\n"
                + "\"nome_file\": \"" + nomeFile + "\",\n"
                + "\"documento_base64\": \"" + cont_b64 + "\",\n"
                + "\"importo_residuo\": \"" + residuo + "\"\n"
                + "}\n"
                + "}";
        JsonObject risposta = call(jsonOp);
        String esito = risposta.get("result").getAsString(); //To fetch the values from json object
        String errore = risposta.get("message").getAsString(); //To fetch the values from json object
        System.out.print(nomeFile + ": ");
        if (esito.equalsIgnoreCase("ok")) {
            System.out.println("correttamente inviato\n");
        } else {
            System.out.println(errore);
        }
    }

    private JsonObject getJwt() throws IOException {
        /**
         * questo è l'account di connessione, da chiedere a commerciale@cameracompensazione.it
         */
        String codAffiliato = "test_environment";
        String token = "sxFSCQJHVuilDVvWswGYLlirm2L6TZc1";
        /**/

        String jsonLogin
                = "{"
                + "\"op\":\"gjwt\","
                + "\"dati\":{"
                + "\"cod_affiliato\":\"" + codAffiliato + "\","
                + "\"token\":\"" + token + "\""
                + "}"
                + "}";
        return call(jsonLogin);
    }

    private JsonObject call(String jsonInputString) throws IOException {
//        System.out.println("jsonInputString: " + jsonInputString);
        HttpURLConnection con = createConnection(new URL("https://webapp.cameracompensazione.it/webservices/"));
        try (OutputStream os = con.getOutputStream()) {
            byte[] input = jsonInputString.getBytes("utf-8");
            os.write(input, 0, input.length);
        }
        try (BufferedReader br = new BufferedReader(
                new InputStreamReader(con.getInputStream(), "utf-8"))) {
            StringBuilder response = new StringBuilder();
            String responseLine = null;
            while ((responseLine = br.readLine()) != null) {
                response.append(responseLine.trim());
            }
//            System.out.println("responseLine: " + responseLine.toString());
            Gson gson = new Gson(); // Creates new instance of Gson
            JsonElement element = gson.fromJson(response.toString(), JsonElement.class); //Converts the json string to JsonElement without POJO 
            JsonObject jsonObj = element.getAsJsonObject(); //Converting JsonElement to JsonObject
            con.disconnect();
            return jsonObj;
        }
    }

    private static HttpURLConnection createConnection(URL url) throws MalformedURLException, IOException {
        HttpURLConnection con = (HttpURLConnection) url.openConnection();
        con.setRequestProperty("Content-Type", "application/json; utf-8");
        con.setRequestProperty("Accept", "application/json");
        con.setDoOutput(true);
        return con;
    }

}
