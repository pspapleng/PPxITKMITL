public class Student {
    public String name;
    public double MidtermScore, FinalScore;

    public void showGrade() {
        double score;
        score = (MidtermScore*0.4) + (FinalScore*0.4) + 20;
        System.out.println(score);

        if ((100 >= score) & (score >= 80))  {
            System.out.println("Your grade is A");
        }
        else if ((80 > score) & (score >= 70))  {
            System.out.println("Your grade is B");
        }
        else if ((70 > score) & (score >= 60))  {
            System.out.println("Your grade is C");
        }
        else if ((60 > score) & (score >= 50))  {
            System.out.println("Your grade is D");
        }
        else if (50 > score)  {
            System.out.println("Your grade is F");
        }
    }
}
