public class Student {
    private int identification;
    private String name;
    private String lastName;
    private String address;
    private int telephone;
    private String rh;
    private String typeLicense;

    public Student(int identification, String name, String lastName, String address, int telephone, String rh, String typeLicense) {
        this.identification = identification;
        this.name = name;
        this.lastName = lastName;
        this.address = address;
        this.telephone = telephone;
        this.rh = rh;
        this.typeLicense = typeLicense;
    }

    public int getIdentification() {
        return this.identification;
    }

    public String getName() {
        return this.name;
    }

    public String getLastName() {
        return this.lastName;
    }

    public String getAddress() {
        return this.address;
    }

    public int getTelephone() {
        return this.telephone;
    }

    public String getRh() {
        return this.rh;
    }

    public String getTypeLicense() {
        return this.typeLicense;
    }
}
